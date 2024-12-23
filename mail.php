<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer files
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// Collect form data
$first_name = htmlspecialchars(trim($_POST['first_name']));
$last_name = htmlspecialchars(trim($_POST['last_name']));
$email = htmlspecialchars(trim($_POST['email']));
$phone = htmlspecialchars(trim($_POST['phone']));
$subject = htmlspecialchars(trim($_POST['subject']));
$level = htmlspecialchars(trim($_POST['level']));
$type = htmlspecialchars(trim($_POST['type']));
$postcode = htmlspecialchars(trim($_POST['postcode']));

// Set up the email message content
$message = "
<html>
<head>
<title>Contact Form Submission</title>
</head>
<body>
<p>You have received a new message from the contact form.</p>
<table>
<tr><td>First Name:</td><td>$first_name</td></tr>
<tr><td>Last Name:</td><td>$last_name</td></tr>
<tr><td>Email:</td><td>$email</td></tr>
<tr><td>Phone:</td><td>$phone</td></tr>
<tr><td>Subject:</td><td>$subject</td></tr>
<tr><td>Level:</td><td>$level</td></tr>
<tr><td>Type:</td><td>$type</td></tr>
<tr><td>Postcode:</td><td>$postcode</td></tr>
</table>
</body>
</html>
";

// Send email using PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // For example, using Gmail's SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@gmail.com'; // Replace with your Gmail address
    $mail->Password = 'your-app-password'; // Replace with your app-specific password (for Gmail with 2FA)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipient and sender
    $mail->setFrom('your-email@gmail.com', 'Your Name'); // Replace with your email and name
    $mail->addAddress('primeteaching24@gmail.com'); // Recipient email

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Contact Form Submission';
    $mail->Body = $message;

    $mail->send();
    echo "<script>alert('Thank you for contacting us!'); location.replace('index.php');</script>";
} catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
}
?>
