<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'new form submission';

$email_body = :"User Name: $name.\n".
               "User Emil: $visitor_email.\n".
                "User Emil: $message .\n".;

$to = 'alemingokamuona@gmail.com';

$headers = "form: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>