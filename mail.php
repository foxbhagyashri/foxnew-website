<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Replace with your secret key (from Google reCAPTCHA Admin)
$secret = '6LfendMrAAAAAFF5c64khRApBnTSvTWDaMQ8l7SD';

// Get the reCAPTCHA response
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

if (!$recaptcha_response) {
    die('reCAPTCHA response missing. Please complete the reCAPTCHA.');
}

// Verify with Google
$verify_url = 'https://www.google.com/recaptcha/api/siteverify';
$data = [
    'secret' => $secret,
    'response' => $recaptcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
];

$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
        'timeout' => 10
    ]
];

$context  = stream_context_create($options);
$result = file_get_contents($verify_url, false, $context);

if ($result === false) {
    die('Failed to contact reCAPTCHA server.');
}

$payload = json_decode($result, true);

// Check if reCAPTCHA succeeded
if (empty($payload['success']) || $payload['success'] !== true) {
    die('reCAPTCHA verification failed. Please try again.');
}

// Continue only if form fields exist
if (!empty($_POST['name'])) {
    $name = $_POST['name'] ?? '';
    $emailid = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'sg2plzcpnl491277.prod.sin2.secureserver.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@foxaircomm.com';
        $mail->Password = 'Dips#&2025';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('info@foxaircomm.com', 'Website Enquiry Form');
        $mail->addAddress('info@foxaircomm.com');
        // $mail->addAddress('foxair.dm@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Enquiry from Website';
        $mail->Body = "
        <html>
        <body>
            <h2>Website Enquiry Details</h2>
            <table border='1' cellpadding='8' cellspacing='0'>
                <tr><td><strong>Full Name:</strong></td><td>{$name}</td></tr>
                <tr><td><strong>Email ID:</strong></td><td>{$emailid}</td></tr>
                <tr><td><strong>Subject:</strong></td><td>{$subject}</td></tr>
                <tr><td><strong>Contact Number:</strong></td><td>{$phone}</td></tr>
                <tr><td><strong>Message:</strong></td><td>{$message}</td></tr>
            </table>
        </body>
        </html>";

        $mail->AltBody = "Full Name: $name\nEmail ID: $emailid\nPhone Number: $phone\nSubject: $subject\nMessage: $message";

        $mail->send();
        echo "<script>window.location.href = 'thank_you.php';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "<script>alert('Invalid request. Please fill out the form correctly.'); window.location.href = 'index.php';</script>";
}
?>