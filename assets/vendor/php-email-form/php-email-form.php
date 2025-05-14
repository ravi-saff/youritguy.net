<?php
$to = 'support@youritguy.net';
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$from = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);

if (filter_var($from, FILTER_VALIDATE_EMAIL)) {
    // Format the email body with Name, Email, and Message
    $email_body = "Name: $name\r\n";
    $email_body .= "Email: $from\r\n";
    $email_body .= "Message:\r\n$message\r\n\r\n";
    $email_body .= "Sender IP: ".$_SERVER['REMOTE_ADDR'];

    // Prepare headers
    $headers = 'From: '.$from . "\r\n" .
               'Reply-To: '.$from . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $email_body, $headers);
    die('OK');
    
} else {
    die('Invalid address');
}
?>