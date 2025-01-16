<!-- $mail->Password   = 'wyzu noyo momx scpo';       -->
<!-- $mail->Username   = 'kritikasrivastav718@gmail.com';  -->


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust path if necessary

$response = array('success' => false, 'error' => '');

try {
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();                       // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;              // Enable SMTP authentication
    $mail->Username   = 'kritikasrivastav718@gmail.com'; // SMTP username
    $mail->Password   = 'wyzu noyo momx scpo';          // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;               // TCP port to connect to

    // Recipients
    $mail->setFrom('kritikasrivastav718@gmail.com', 'Mailer');
    $mail->addAddress('kritikasrivastav718@gmail.com', 'Joe User'); // Add a recipient

    // Content
    $mail->isHTML(true);                                 // Set email format to HTML
    $mail->Subject = 'Form Submission';
    $mail->Body    = 'Name: ' . htmlspecialchars($_POST['name']) . '<br>' .
                     'Email: ' . htmlspecialchars($_POST['email']) . '<br>' .
                     'Phone: ' . htmlspecialchars($_POST['phone']) . '<br>' .
                     'Message: ' . htmlspecialchars($_POST['message']);
    $mail->AltBody = 'Name: ' . htmlspecialchars($_POST['name']) . "\n" .
                     'Email: ' . htmlspecialchars($_POST['email']) . "\n" .
                     'Phone: ' . htmlspecialchars($_POST['phone']) . "\n" .
                     'Message: ' . htmlspecialchars($_POST['message']);

    $mail->send();
    $response['success'] = true;
} catch (Exception $e) {
    $response['error'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
