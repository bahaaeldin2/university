<?php
$name = $_POST['name'];
$visitor-email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email-form = 'pbahaa94@gmail.com';

$email-subject= 'new form submission';


$email-body = "user name: $name.\n".
             "user email: $visitor-email.\n".
             "subject: $subject.\n".
             "user message: $message.\n";

$to = 'pbahaa94@gmail.com';

$headers = "form: $email-from \r\n";

$headers = "Reply-to: $visitor-email \r\n";

mail($to,$email-subject,email-body,$headers);
header("location: contact.html")
?>