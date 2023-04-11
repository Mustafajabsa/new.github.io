<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from = 'jabsa2020@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n" .
    "User Email: $visitor_email.\n" .
    "subject: $subject.\n" .
    "User Email: $visitor_email.\n" .
    "User Message: $message.\n";
$to = 'jabsa2020@gmail.com';
$headers = "From $email_from \r\n";
$header .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("location: contact.html");
?>