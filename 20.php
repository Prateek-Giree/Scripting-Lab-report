<?php
 
$to = "prateekgiree079@gmail.com";

$subject = "Test Email";
$message = "This is a test email sent from PHP.";

$headers = "From: praeekgiree7@gmail.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}
