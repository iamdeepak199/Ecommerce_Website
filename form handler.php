<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor model= post ['model'];
$visitor  phoneno = post ['phone no'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'electronicvilla.com';

$email_subject = 'New Form Submision';

$email_body = "User Name: $name.\n".
                "User email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Name: $message.\n";

$to = 'iamdeepak199@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");



?>
