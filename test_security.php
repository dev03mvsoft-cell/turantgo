<?php
$_POST['g-recaptcha-response'] = 'token_abc123';
require_once(__DIR__ . '/includes/security.php');
echo $_POST['g-recaptcha-response'];
