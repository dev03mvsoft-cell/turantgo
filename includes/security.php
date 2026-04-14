<?php
// includes/security.php
// Centralized security for your PHP website

// 1. Disable directory listing
if (file_exists('.htaccess')) {
    $htaccess = file_get_contents('.htaccess');
    if (strpos($htaccess, 'Options -Indexes') === false) {
        file_put_contents('.htaccess', "\nOptions -Indexes\n", FILE_APPEND);
    }
}

// 2. Set security headers
header('X-Frame-Options: SAMEORIGIN'); // Clickjacking
header('X-Content-Type-Options: nosniff');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: no-referrer-when-downgrade');
header('Content-Security-Policy: default-src \'self\'; script-src \'self\'; object-src \'none\';');
header('Permissions-Policy: geolocation=(), microphone=()');
header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');

// 3. Prevent tabnabbing
header('Cross-Origin-Opener-Policy: same-origin');

// 4. Prevent session hijacking
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.use_strict_mode', 1);

// 5. Global XSS and SQLi input sanitization
function sanitize_input($data) {
    if (is_array($data)) {
        return array_map('sanitize_input', $data);
    }
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}
$_GET = sanitize_input($_GET);
$_POST = sanitize_input($_POST);
$_COOKIE = sanitize_input($_COOKIE);

// 6. Block common webshell/backdoor patterns in requests
$patterns = [
    '/eval\s*\(/i', '/base64_decode\s*\(/i', '/shell_exec\s*\(/i', '/passthru\s*\(/i',
    '/system\s*\(/i', '/exec\s*\(/i', '/popen\s*\(/i', '/proc_open\s*\(/i', '/assert\s*\(/i'
];
foreach (array_merge($_GET, $_POST) as $value) {
    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $value)) {
            http_response_code(403);
            exit('Forbidden');
        }
    }
}

// 7. Block malicious bots
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$bad_bots = ['curl', 'wget', 'python', 'libwww', 'scan', 'bot', 'spider', 'scrapy'];
foreach ($bad_bots as $bot) {
    if (stripos($user_agent, $bot) !== false) {
        http_response_code(403);
        exit('Forbidden');
    }
}

// 8. Prevent information leakage
error_reporting(0);
ini_set('display_errors', 0);

// 9. Secure routing (basic example)
if (isset($_GET['page']) && !preg_match('/^[a-zA-Z0-9_-]+$/', $_GET['page'])) {
    http_response_code(400);
    exit('Invalid page');
}

// 10. Robots management
file_put_contents('robots.txt', "User-agent: *\nDisallow: /includes/\nDisallow: /PHPMailer/\n");

// 11. Meta-tag injection shield (to be used in <head> of HTML)
function security_meta_tags() {
    echo '<meta http-equiv="Content-Security-Policy" content="default-src \'self\';">';
    echo '<meta name="referrer" content="no-referrer">';
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
}

?>