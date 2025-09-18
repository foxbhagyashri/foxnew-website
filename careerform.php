<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (!empty($_POST['name'])) {
    $name = $_POST['name'] ?? '';
    $emailid = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $role = $_POST['role'] ?? '';
    $project = $_POST['project'] ?? '';
    $salary = $_POST['salary'] ?? '';

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
                <tr><td><strong>Phone Number:</strong></td><td>{$phone}</td></tr>
                <tr><td><strong>Position:</strong></td><td>{$role}</td></tr>
                <tr><td><strong>Project:</strong></td><td>{$project}</td></tr>
                <tr><td><strong>Salary Description:</strong></td><td>{$salary}</td></tr>
            </table>
        </body>
        </html>";

        $mail->AltBody = "Full Name: $name\nEmail ID: $emailid\nPhone Number: $phone\nPosition: $role\nProject: $project\nSalary: $salary";

        // Attach Resume (PDF)
        if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
            $mail->addAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name']);
        }

        $mail->send();
        echo "<script>window.location.href = 'thank_you.php';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "<script>alert('Invalid request. Please fill out the form correctly.'); window.location.href = 'index.php';</script>";
}