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

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /contact");
    exit;
}

// ====================== 1. CSRF / Origin Check ======================
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$host = $_SERVER['HTTP_HOST'] ?? '';
if (!empty($referer) && parse_url($referer, PHP_URL_HOST) !== $host) {
    error_log("CSRF Attempt: Invalid Referer");
    header("Location: /contact?error=6");
    exit;
}

// ====================== 2. Flood Control (Rate Limiting) ======================
if (isset($_SESSION['last_contact_submit']) && (time() - $_SESSION['last_contact_submit'] < 45)) {
    // Blocks user from submitting more than once every 45 seconds
    error_log("Spam trigger: Rate limit exceeded");
    header("Location: /contact?error=6");
    exit;
}
$_SESSION['last_contact_submit'] = time();


// ====================== reCAPTCHA V3 Validation ======================
$recaptcha_secret = "6LfLQWEsAAAAABjaJY-yiLkFlggnNbFQJ68xm3Jo"; // <-- Replace here
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

if (empty($recaptcha_response)) {
    error_log("Missing Recaptcha token");
    header("Location: /contact?error=6");
    exit;
}

$verify_url = "https://www.google.com/recaptcha/api/siteverify";
$verify_data = [
    'secret' => $recaptcha_secret,
    'response' => $recaptcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($verify_data)
    ]
];

$context = stream_context_create($options);
$result = file_get_contents($verify_url, false, $context);
$json = json_decode($result, true);

if (!$json['success'] || $json['score'] < 0.5) {
    error_log("Recaptcha failed. Score: " . ($json['score'] ?? 'no score'));
    header("Location: /contact?error=6");
    exit;
}

// ====================== HONEYPOT BOT PROTECTION ======================
$honeypotFields = ['website', 'email_confirm'];
foreach ($honeypotFields as $field) {
    if (!empty($_POST[$field])) {
        error_log("Honeypot triggered by bot");
        header("Location: /contact?success=1");
        exit;
    }
}

// ====================== REQUIRED FIELDS ======================
if (
    empty($_POST['name']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['service']) ||
    empty($_POST['message'])
) {
    header("Location: /contact?error=1");
    exit;
}

$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$phone = htmlspecialchars(trim($_POST['phone']));
$service = htmlspecialchars(trim($_POST['service']));
$message = htmlspecialchars(trim($_POST['message']));

// ====================== EMAIL VALIDATION ======================
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: /contact?error=2");
    exit;
}

// Phone validation
if (!preg_match('/^[\+]?[0-9\s\-\(\)]{10,}$/', $phone)) {
    header("Location: /contact?error=phone");
    exit;
}

// ====================== SEND EMAIL USING PHPMailer ======================
$adminEmailSent = false;
$userEmailSent = false;

try {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'turantgomultimodal@gmail.com';
    $mail->Password   = 'nrqv xkae qpnt wlvk';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    ];

    $mail->setFrom('turantgomultimodal@gmail.com', 'Website Contact');
    $mail->addAddress('info@turantgo.com');
    $mail->addReplyTo($email);

    $mail->isHTML(true);
    $mail->Subject = "New Contact Inquiry - $service";

    $mail->Body = "
    <div style='background-color: #f4f7f9; padding: 40px 20px; font-family: sans-serif;'>
        <div style='max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-top: 6px solid #003e6e;'>
            <div style='background-color: #ffffff; padding: 25px; text-align: center; border-bottom: 1px solid #f0f0f0;'>
                <img src='https://turantgo.com/assets/img/team/logo.png' alt='TurantGo' style='width: 180px; height: auto;'>
            </div>
            <div style='padding: 30px; line-height: 1.6;'>
                <h2 style='color: #003e6e; margin-top: 0; font-size: 22px; text-align: center;'>New Contact Inquiry</h2>
                <p style='font-size: 15px; color: #555; text-align: center;'>You have received a new message through the website contact form.</p>
                <div style='background-color: #f9f9f9; border-radius: 8px; padding: 20px; margin-top: 25px;'>
                    <table style='width: 100%; border-collapse: collapse;'>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eeeeee; width: 120px; color: #888;'><strong>Name:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eeeeee; color: #333;'>$name</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eeeeee; color: #888;'><strong>Email:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eeeeee;'><a href='mailto:$email' style='color: #003e6e; text-decoration: none;'>$email</a></td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eeeeee; color: #888;'><strong>Phone:</strong></td>
                            <td style='padding: 10px 0; border-bottom: 1px solid #eeeeee; color: #333;'>$phone</td>
                        </tr>
                        <tr>
                            <td style='padding: 10px 0; color: #888;'><strong>Service:</strong></td>
                            <td style='padding: 10px 0; color: #333;'>$service</td>
                        </tr>
                    </table>
                </div>
                <div style='margin-top: 30px;'>
                    <p style='color: #888; margin-bottom: 10px;'><strong>Message Content:</strong></p>
                    <div style='background: #fff; padding: 15px; border: 1px dashed #d0d0d0; border-radius: 6px; font-style: italic; color: #444; line-height: 1.8;'>
                        " . nl2br($message) . "
                    </div>
                </div>
            </div>
            <div style='background-color: #003e6e; padding: 20px; text-align: center; color: #ffffff; font-size: 12px;'>
                <p style='margin: 0;'>&copy; " . date('Y') . " TurantGo Multimodal Solutions Pvt Ltd.</p>
                <p style='margin: 5px 0 0; opacity: 0.8;'>This is an automated notification from your website.</p>
            </div>
        </div>
    </div>
    ";

    $mail->send();
    $adminEmailSent = true;
} catch (Exception $e) {
    error_log("Admin email failed: " . $mail->ErrorInfo);
}

try {
    $ackMail = new PHPMailer(true);
    $ackMail->isSMTP();
    $ackMail->Host       = 'smtp.gmail.com';
    $ackMail->SMTPAuth   = true;
    $ackMail->Username   = 'turantgomultimodal@gmail.com';
    $ackMail->Password   = 'nrqv xkae qpnt wlvk';
    $ackMail->SMTPSecure = 'tls';
    $ackMail->Port       = 587;
    $ackMail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true,
        ],
    ];

    $ackMail->setFrom('turantgomultimodal@gmail.com', 'TurantGo');
    $ackMail->addAddress($email, $name);

    $ackMail->isHTML(true);
    $ackMail->Subject = 'Thank you for contacting us!';
    $ackMail->Body = "
    <div style='background-color: #f4f7f9; padding: 40px 20px; font-family: sans-serif;'>
        <div style='max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-top: 6px solid #25d366;'>
            <div style='background-color: #ffffff; padding: 25px; text-align: center; border-bottom: 1px solid #f0f0f0;'>
                <img src='https://turantgo.com/assets/img/team/logo.png' alt='TurantGo' style='width: 180px; height: auto;'>
            </div>
            <div style='padding: 30px; line-height: 1.6; color: #444;'>
                <h2 style='color: #003e6e; margin-top: 0; font-size: 22px; text-align: center;'>Thank You For Reaching Out</h2>
                <p style='font-size: 16px;'>Dear <strong>$name</strong>,</p>
                <p>We have successfully received your inquiry regarding <strong>$service</strong>. Our team is currently reviewing your requirements and will get back to you within 24 business hours.</p>
                
                <div style='background-color: #f9f9f9; border-radius: 8px; padding: 20px; margin-top: 25px;'>
                    <p style='margin: 0 0 10px; color: #888; font-size: 14px;'><strong>Summary of your request:</strong></p>
                    <div style='color: #666; font-style: italic;'>
                        " . nl2br($message) . "
                    </div>
                </div>
                
                <p style='margin-top: 30px;'>Best Regards,<br><span style='color: #003e6e; font-weight: bold;'>Customer Success Team</span><br>TurantGo Multimodal Solutions</p>
            </div>
            <div style='background-color: #003e6e; padding: 20px; text-align: center; color: #ffffff; font-size: 12px;'>
                <p style='margin: 0;'>Visit our website: <a href='https://turantgo.com' style='color: #ffffff; text-decoration: underline;'>www.turantgo.com</a></p>
                <p style='margin: 8px 0 0;'>&copy; " . date('Y') . " TurantGo Multimodal Solutions Pvt Ltd.</p>
            </div>
        </div>
    </div>
    ";

    $ackMail->send();
    $userEmailSent = true;
} catch (Exception $e) {
    error_log("User email failed: " . $ackMail->ErrorInfo);
}

if ($adminEmailSent) {
    header("Location: /contact?success=1");
    exit;
} else {
    header("Location: /contact?error=4");
    exit;
}
