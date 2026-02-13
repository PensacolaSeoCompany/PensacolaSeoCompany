<?php
// Handle form submission
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$successMessage = '';
$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    $datetime = htmlspecialchars(trim($_POST['datetime'] ?? '')); // Selected date/time

    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message) && !empty($datetime)) {
        try {
            $mail = new PHPMailer(true);
            // Server settings (configure with your SMTP details)
            $mail->isSMTP();
            $mail->Host = 'smtp.example.com'; // Your SMTP host
            $mail->SMTPAuth = true;
            $mail->Username = 'yourusername@example.com';
            $mail->Password = 'yourpassword';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('recipient@example.com'); // Where to send the email

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Appointment Request';
            $mail->Body = "
                <h2>New Appointment Request</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Message:</strong> $message</p>
                <p><strong>Selected Date/Time:</strong> $datetime</p>
            ";
            $mail->AltBody = "Name: $name\nEmail: $email\nMessage: $message\nSelected Date/Time: $datetime";

            $mail->send();
            $successMessage = 'Your request has been sent successfully!';
        } catch (Exception $e) {
            $errorMessage = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $errorMessage = 'Please fill out all fields correctly.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form Example</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="text-center mb-4">Appointment Booking</h1>
    
    <!-- Button to trigger the modal -->
    <div class="text-center">
        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#appointmentModal">
            Book an Appointment
        </button>
    </div>

    <!-- Success/Error Messages -->
    <?php if ($successMessage): ?>
        <div class="alert alert-success mt-4"><?php echo $successMessage; ?></div>
    <?php endif; ?>
    <?php if ($errorMessage): ?>
        <div class="alert alert-danger mt-4"><?php echo $errorMessage; ?></div>
    <?php endif; ?>

    <!-- Modal (Pop-out Form) -->
    <div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="appointmentModalLabel">Book Your Appointment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <!-- Calendar (Date/Time Picker) below the fields -->
                        <div class="mb-3">
                            <label for="datetime" class="form-label">Select Date and Time</label>
                            <input type="datetime-local" class="form-control" id="datetime" name="datetime" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>