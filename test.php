<?php
include('smtpconfig.php');
include('smtpclass.php');
$to = "gnanamoorthi@bworks.in"; 
$subject = "Test mail";
$message = "Hello! This is a simple test email message.";
$from = "test@graphlertech.com";
$headers = "From: Gnanamoorthi";
$SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $message);
$SMTPChat = $SMTPMail->SendMail();
if($SMTPChat){ echo "Mail Sent.";} else{ echo "Error in mail send"; }
?>