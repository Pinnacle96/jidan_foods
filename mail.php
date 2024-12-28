<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Retrieve form data
    $name = isset($_POST['name']) ? htmlspecialchars(strip_tags($_POST['name'])) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars(strip_tags($_POST['phone'])) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars(strip_tags($_POST['subject'])) : 'No Subject';
    $message = isset($_POST['message']) ? htmlspecialchars(strip_tags($_POST['message'])) : '';

    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all required fields.";
        exit;
    }

    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'rcntsonline@gmail.com';
    $mail->Password = 'xdez xgzg mpyr ssyk'; // Replace with your app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    // Email content
    $mail->setFrom('rcntsonline@gmail.com', 'JIDAN FOODS ENQUIRY');
    $mail->addAddress('tosintayo4jamb@gmail.com');
    $mail->Subject = $subject;

    // Email body with form fields
    $mail->Body = "
        <html>
        <body>
            <h2>Contact Form Message</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong><br>$message</p>
        </body>
        </html>
    ";
    $mail->isHTML(true);

    // Send the email
    $mail->send();

    // Redirect to contact.php after successful email
    header('Location: contact.php?status=success');
    exit;
} catch (Exception $e) {
    // Redirect with error status and detailed reason
    header('Location: contact.php?status=error&reason=' . urlencode($mail->ErrorInfo));
    exit;
}
?>