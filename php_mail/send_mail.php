<?php
//receiver email
$to_email = "pranjal.khatiwoda@gmail.com";
//Subject for the email
$subject = "Simple Email Test via PHP";
//Body of email
$body = "Hi, This is test email send by PHP Script";
//Sender email i.e. your email used in config file.
$headers = "From: pranjal.khatiwada@sifal.deerwalk.edu.np";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
?>