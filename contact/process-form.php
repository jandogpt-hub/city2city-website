<?php
/**
 * Simple Contact Form Handler
 * City 2 City Industrial Repair
 */

require_once __DIR__ . '/../../includes/config.php';

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and Validate Inputs
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);
    $company = filter_var($_POST["company"], FILTER_SANITIZE_STRING);
    $equipment = filter_var($_POST["equipment"], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    
    // Check required fields
    if (empty($name) || empty($phone) || empty($message)) {
        // Redirect back with error
        header("Location: ../contact/?error=missing_fields");
        exit;
    }

    // Email Configuration
    // TODO: Change back to BUSINESS_EMAIL after testing
    $to = 'jandogpt@gmail.com'; // TESTING - was: BUSINESS_EMAIL
    $subject = "New Website Inquiry from $name";
    
    // Email Body
    $body = "New message from your City 2 City Industrial Repair website:\n\n";
    $body .= "Name: $name\n";
    $body .= "Company: $company\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Equipment: $equipment\n";
    $body .= "Message:\n$message\n";
    
    // Email Headers
    // Important: Hostinger usually requires 'From' to be a valid domain email like noreply@yourdomain.com
    // Use user's email as Reply-To
    $headers = "From: Website Contact <noreply@city2cityindustrialrepair.com>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send Email
    if (mail($to, $subject, $body, $headers)) {
        // Success
        header("Location: thank-you.php");
        exit;
    } else {
        // Failure
        error_log("Mail failed to send to $to from $email");
        header("Location: ../contact/?error=send_failed");
        exit;
    }

} else {
    // Not a POST request
    header("Location: ../contact/");
    exit;
}
