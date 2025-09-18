<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

//print_r($_POST);

if (!empty($_POST['name'])) {
    $name = $_POST['name'] ?? '';
    $emailid = $_POST['email'] ?? '';
    $business_name = $_POST['business_name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $service_name = $_POST['service_name'] ?? '';



    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'sg2plzcpnl491277.prod.sin2.secureserver.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@foxaircomm.com';
        $mail->Password = 'Dips#&2025';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // safer than using plain 'tls'
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('info@foxaircomm.com', 'Website Enquiry Form');
        $mail->addAddress('info@foxaircomm.com');
        //  $mail->addAddress('foxair.dm@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Enquiry from Website';
        $mail->Body = "
        <html>
        <body>
            <h2>Website Enquiry Details</h2>
            <table border='1' cellpadding='8' cellspacing='0'>
                <tr><td><strong>Full Name:</strong></td><td>{$name}</td></tr>
                <tr><td><strong>Email ID:</strong></td><td>" . $emailid . "</td></tr>
                <tr><td><strong>Phone Number:</strong></td><td>{$phone}</td></tr>
                <tr><td><strong>Business Name:</strong></td><td>{$business_name }</td></tr>
                <tr><td><strong>Service Name:</strong></td><td>{$service_name }</td></tr>
            </table>
        </body>
        </html>";

        $mail->AltBody = "Full Name: $name\nEmail ID: $emailid\nPhone Number: $phone\nBusiness Name: $business_name\nService Name: $service_name";

        $mail->send();
        echo "<script>window.location.href = 'thank_you.php';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "<script>alert('Invalid request. Please fill out the form correctly.'); window.location.href = 'index.php';</script>";
}
?>