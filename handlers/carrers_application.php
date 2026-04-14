<?php
require_once(dirname(__DIR__) . '/includes/security.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require dirname(__DIR__) . '/PHPMailer/Exception.php';
require dirname(__DIR__) . '/PHPMailer/PHPMailer.php';
require dirname(__DIR__) . '/PHPMailer/SMTP.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Only handle POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /career");
    exit;
}

// ====================== 1. CSRF / Origin Check ======================
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$host = $_SERVER['HTTP_HOST'] ?? '';
if (!empty($referer) && parse_url($referer, PHP_URL_HOST) !== $host) {
    header("Location: /career?error=4");
    exit;
}

// ====================== 2. Flood Control (Rate Limiting) ======================
if (isset($_SESSION['last_career_submit']) && (time() - $_SESSION['last_career_submit'] < 45)) {
    // Blocks user from submitting more than once every 45 seconds
    header("Location: /career?error=4");
    exit;
}
$_SESSION['last_career_submit'] = time();

// ----- Honeypot Protection -----
$honeypotFields = ['website'];
foreach ($honeypotFields as $field) {
    if (!empty($_POST[$field])) {
        // Bot detected, silently return success
        header("Location: /career?success=1");
        exit;
    }
}

// ----- reCAPTCHA v3 Verification -----
$secretKey = "6LfLQWEsAAAAABjaJY-yiLkFlggnNbFQJ68xm3Jo"; // Replace with your reCAPTCHA v3 secret
$recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';

if (empty($recaptchaResponse)) {
    header("Location: /career?error=captcha");
    exit;
}

// Verify with Google
$verifyUrl = "https://www.google.com/recaptcha/api/siteverify";
$data = [
    'secret' => $secretKey,
    'response' => $recaptchaResponse,
    'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ],
];

$context = stream_context_create($options);
$result = file_get_contents($verifyUrl, false, $context);
$captchaResult = json_decode($result, true);

// Check success and score
if (!$captchaResult || !$captchaResult['success'] || ($captchaResult['score'] ?? 0) < 0.5) {
    header("Location: /career?error=captcha");
    exit;
}

// ----- Collect & Validate Form Data -----
$name           = htmlspecialchars(trim($_POST['name'] ?? ''));
$contact_number = htmlspecialchars(trim($_POST['contact_number'] ?? ''));
$email          = htmlspecialchars(trim($_POST['email'] ?? ''));
$about          = htmlspecialchars(trim($_POST['about'] ?? ''));
$address        = htmlspecialchars(trim($_POST['address'] ?? ''));

if (!$name || !$contact_number || !$email || !$about || !$address) {
    header("Location: /career?error=1");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: /career?error=2");
    exit;
}

if (!preg_match('/^[\+]?[0-9\s\-\(\)]{10,}$/', $contact_number)) {
    header("Location: /career?error=phone");
    exit;
}

// ----- File Upload Check -----
if (isset($_FILES['pdf_upload']) && $_FILES['pdf_upload']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['pdf_upload'];
    // Completely Sanitize File Name for Directory Traversal guards
    $raw_name = basename($file['name']);
    $file_name = preg_replace('/[^a-zA-Z0-9_.-]/', '_', $raw_name); 
    $file_tmp  = $file['tmp_name'];
    $file_size = $file['size'];

    // 1. Extension check (block double extensions)
    $allowed_ext = ['pdf'];
    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    if (!in_array($ext, $allowed_ext) || $file_size > 5 * 1024 * 1024) {
        header("Location: /career?error=file");
        exit;
    }
    // Block double extensions (e.g., .pdf.php)
    if (preg_match('/\.pdf\.[a-z0-9]+$/i', $file_name)) {
        header("Location: /career?error=file_double_ext");
        exit;
    }

    // 2. MIME type verification
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime  = finfo_file($finfo, $file_tmp);
    finfo_close($finfo);
    if ($mime !== 'application/pdf') {
        header("Location: /career?error=file_mime");
        exit;
    }

    // 3. File content scan for webshell/backdoor patterns
    $file_content = file_get_contents($file_tmp, false, null, 0, 4096); // Only scan first 4KB
    $dangerous_patterns = [
        '/<\?php/i',
        '/eval\s*\(/i',
        '/base64_decode\s*\(/i',
        '/shell_exec\s*\(/i',
        '/passthru\s*\(/i',
        '/system\s*\(/i',
        '/exec\s*\(/i',
        '/popen\s*\(/i',
        '/proc_open\s*\(/i',
        '/assert\s*\(/i'
    ];
    foreach ($dangerous_patterns as $pattern) {
        if (preg_match($pattern, $file_content)) {
            header("Location: /career?error=file_shell");
            exit;
        }
    }
    // 4. Prevent upload to web-accessible folder (optional, recommend storing outside webroot)
    // You may move the file to a safe directory here if needed
} else {
    header("Location: /career?error=file_missing");
    exit;
}

// ----- Send Email via PHPMailer -----
try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'turantgomultimodal@gmail.com';
    $mail->Password   = 'nrqv xkae qpnt wlvk';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->CharSet    = 'UTF-8';
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    ];

    $mail->setFrom('turantgomultimodal@gmail.com', 'Career Application');
    $mail->addAddress('info@turantgo.com', 'Admin'); // Admin Email
    $mail->addReplyTo($email, $name);

    if (isset($file_tmp) && file_exists($file_tmp)) {
        $mail->addAttachment($file_tmp, $file_name);
    }

    $mail->isHTML(true);
    $mail->Subject = "New Career Application: $name";
    $mail->Body = "
    <div style='background-color: #f4f7f9; padding: 40px 20px; font-family: sans-serif;'>
        <div style='max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-top: 6px solid #ff6f01;'>
            <div style='background-color: #ffffff; padding: 25px; text-align: center; border-bottom: 1px solid #f0f0f0;'>
                <img src='https://turantgo.com/assets/img/team/logo.png' alt='TurantGo' style='width: 180px; height: auto;'>
            </div>
            <div style='padding: 30px; line-height: 1.6;'>
                <h2 style='color: #003e6e; margin-top: 0; font-size: 22px; text-align: center;'>New Career Application</h2>
                <p style='font-size: 15px; color: #555; text-align: center;'>A new job application has been submitted through the careers page.</p>
                <div style='background-color: #f9f9f9; border-radius: 8px; padding: 20px; margin-top: 25px;'>
                    <table style='width: 100%; border-collapse: collapse;'>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eeeeee; width: 150px; color: #888;'><strong>Applicant Name:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eeeeee; color: #333;'>$name</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eeeeee; color: #888;'><strong>Email Address:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eeeeee;'><a href='mailto:$email' style='color: #003e6e; text-decoration: none;'>$email</a></td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eeeeee; color: #888;'><strong>Contact No:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eeeeee; color: #333;'>$contact_number</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; color: #888;'><strong>Address:</strong></td>
                            <td style='padding: 10px 0; color: #333;'>$address</td>
                        </tr>
                    </table>
                </div>
                <div style='margin-top: 25px;'>
                    <p style='color: #888; margin-bottom: 10px;'><strong>Professional Summary/About:</strong></p>
                    <div style='background: #fff; padding: 15px; border: 1px dashed #d0d0d0; border-radius: 6px; color: #444; line-height: 1.8;'>
                        " . nl2br($about) . "
                    </div>
                </div>
                <p style='margin-top: 20px; color: #ff6f01; font-weight: bold; font-size: 14px; text-align: center;'>Note: The applicant's resume is attached to this email.</p>
            </div>
            <div style='background-color: #003e6e; padding: 20px; text-align: center; color: #ffffff; font-size: 12px;'>
                &copy; " . date('Y') . " TurantGo Multimodal Solutions Pvt Ltd. HR Department.
            </div>
        </div>
    </div>
    ";

    $mail->AltBody = "New Career Application\nName: $name\nEmail: $email\nContact: $contact_number\nAbout: $about\nAddress: $address";

    $mail->send();

    header("Location: /career?success=1");
    exit;
} catch (Exception $e) {
    error_log("PHPMailer Error: " . $e->getMessage());
    header("Location: /career?error=4");
    exit;
}
