<?php

include('smtpconfig.php');
include('smtpclass.php');

$to = "raghuraman.bworks@gmail.com";
$from = "test@graphlertech.com";
$subject = "Test mail";
$body ="this is test mail";
$SMTPMail = new SMTPClient ($SmtpServer, $SmtpPort, $SmtpUser, $SmtpPass, $from, $to, $subject, $body);
$SMTPChat = $SMTPMail->SendMail();
if($SMTPChat){echo "Mail send"; } else { echo "Error! <br/>" . $SMTPChat; }
?>
