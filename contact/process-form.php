<?php
/**
 * Contact Form Handler with reCAPTCHA
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../includes/config.php';

// =============================================================================
// RECAPTCHA CONFIGURATION
// Get your keys at: https://www.google.com/recaptcha/admin
// =============================================================================
define('RECAPTCHA_SITE_KEY', '');   // TODO: Add your reCAPTCHA site key
define('RECAPTCHA_SECRET_KEY', ''); // TODO: Add your reCAPTCHA secret key

// =============================================================================
// EMAIL CONFIGURATION
// =============================================================================
define('FORM_RECIPIENT', BUSINESS_EMAIL);      // Client: city2city19@gmail.com
define('FORM_CC', 'jandogpt@gmail.com');        // Your copy for tracking

/**
 * Verifies reCAPTCHA response with Google
 * 
 * @param string $token The reCAPTCHA response token
 * @return bool True if verification passed
 */
function verifyRecaptcha($token) {
    if (empty(RECAPTCHA_SECRET_KEY)) {
        // Skip verification if no key configured
        return true;
    }
    
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => RECAPTCHA_SECRET_KEY,
        'response' => $token,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];
    
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result, true);
    
    return ($response['success'] === true);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verify reCAPTCHA first
    $recaptcha_token = $_POST['g-recaptcha-response'] ?? '';
    if (!empty(RECAPTCHA_SECRET_KEY) && !verifyRecaptcha($recaptcha_token)) {
        header("Location: ./?error=captcha_failed");
        exit;
    }

    // Sanitize and Validate Inputs (PHP 8.1+ compatible)
    $name = htmlspecialchars(trim($_POST["name"] ?? ''), ENT_QUOTES, 'UTF-8');
    $email = filter_var($_POST["email"] ?? '', FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST["phone"] ?? ''), ENT_QUOTES, 'UTF-8');
    $company = htmlspecialchars(trim($_POST["company"] ?? ''), ENT_QUOTES, 'UTF-8');
    $equipment = htmlspecialchars(trim($_POST["equipment"] ?? ''), ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars(trim($_POST["message"] ?? ''), ENT_QUOTES, 'UTF-8');
    
    // Check required fields
    if (empty($name) || empty($phone) || empty($message)) {
        header("Location: ./?error=missing_fields");
        exit;
    }

    // Email Configuration
    $to = FORM_RECIPIENT;
    $subject = "New Website Inquiry from $name";
    
    // Email Body
    $body = "New message from your City 2 City Industrial Repair website:\n\n";
    $body .= "----------------------------------------\n";
    $body .= "Name: $name\n";
    $body .= "Company: $company\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Equipment: $equipment\n";
    $body .= "----------------------------------------\n";
    $body .= "Message:\n$message\n";
    $body .= "----------------------------------------\n";
    $body .= "\nSubmitted: " . date('Y-m-d H:i:s') . "\n";
    
    // Email Headers with CC
    $headers = "From: Website Contact <noreply@city2cityindustrialrepair.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "CC: " . FORM_CC . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send Email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: thank-you.php");
        exit;
    } else {
        error_log("Mail failed to send to $to from $email");
        header("Location: ./?error=send_failed");
        exit;
    }

} else {
    // Not a POST request
    header("Location: ./");
    exit;
}
