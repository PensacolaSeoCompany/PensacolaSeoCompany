<?php
// contact.php - UPDATED TO INCLUDE COMMENTS + CONSENT + INTERESTS

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name      = strip_tags(trim($_POST["name"] ?? ''));
    $email     = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone     = strip_tags(trim($_POST["phone"] ?? ''));
    $message   = strip_tags(trim($_POST["message"] ?? ''));  // ← NEW: Comments
    $math      = trim($_POST["math"] ?? '');
    $interests = isset($_POST["interest"]) ? implode(", ", $_POST["interest"]) : "None selected";
    $consent   = isset($_POST["consent"]) ? "Yes – Agreed to receive emails/SMS" : "No – Did not agree";  // ← NEW: Consent status

    // Math check
    if ($math !== "10") {
        die("Incorrect answer to 5 + 5");
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'pensacolaseocompany@gmail.com';
        $mail->Password   = 'zvmw uaks hetx jtnk';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('no-reply@pensacolaseocompany.com', 'Pensacola SEO Form');
        $mail->addAddress('pensacolaseocompany@gmail.com');
        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "New SEO Lead - $name";

        $mail->Body = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Interested in:</strong> $interests</p>
        <p><strong>Consent to emails/SMS:</strong> $consent</p>
        <p><strong>Comments/Message:</strong><br>$message</p>
        <hr>
        <small>Sent from pensacolaseocompany.com</small>
        ";

        $mail->AltBody = "New lead:\nName: $name\nEmail: $email\nPhone: $phone\nInterests: $interests\nConsent: $consent\nMessage: $message";

        $mail->send();

        header("Location: /thank-you.php");
        exit;

    } catch (Exception $e) {
        echo "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
}
?>