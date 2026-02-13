<?php
// contact.php - UPDATED WITH ALL FIELDS (message + consent + interests + math check) + DATETIME + WEBSITE + TARGET KEYWORD
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require '../config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"] ?? ''));
    $email = filter_var(trim($_POST["email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"] ?? ''));
    $message = strip_tags(trim($_POST["message"] ?? 'No message provided')); // ← NEW: Comments
    $math = trim($_POST["math"] ?? '');
    $interests = isset($_POST["interest"]) ? implode(", ", $_POST["interest"]) : "None selected";
    $consent = isset($_POST["consent"]) ? "Yes – Agreed to receive communications" : "No – Did not agree"; // ← NEW: Consent
    $datetime = strip_tags(trim($_POST["datetime"] ?? 'No time selected')); // ← NEW: Capture selected date/time
    $website = strip_tags(trim($_POST["website"] ?? 'No website provided')); // ← NEW: Website URL
    $target_keyword = strip_tags(trim($_POST["target_keyword"] ?? 'No target keyword provided')); // ← NEW: Target Keyword
    // Math anti-spam check
    if ($math !== "10") {
        die("Wrong answer to 5 + 5 – form not sent.");
    }
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USERNAME;
        $mail->Password = SMTP_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = SMTP_PORT;
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress(CONTACT_EMAIL);
        $mail->addReplyTo($email, $name);
        $mail->isHTML(true);
        $mail->Subject = "New SEO Lead - $name";
        $mail->Body = "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Interested in:</strong> $interests</p>
        <p><strong>Consent:</strong> $consent</p>
        <p><strong>Comments/Message:</strong><br>$message</p>
        <p><strong>Website URL:</strong> $website</p> <!-- ← NEW: Include website -->
        <p><strong>Target Keyword:</strong> $target_keyword</p> <!-- ← NEW: Include target keyword -->
        <p><strong>Requested Date/Time (CST):</strong> $datetime</p> <!-- ← NEW: Include in HTML body -->
        <hr>
        <small>Sent from pensacolaseocompany.com</small>
        ";
        $mail->AltBody = "New lead:\nName: $name\nEmail: $email\nPhone: $phone\nInterests: $interests\nConsent: $consent\nMessage: $message\nWebsite URL: $website\nTarget Keyword: $target_keyword\nRequested Date/Time (CST): $datetime"; // ← NEW: Include in plain-text body
        $mail->send();
        header("Location: /thank-you.php");
        exit;
    } catch (Exception $e) {
        echo "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
}
?>