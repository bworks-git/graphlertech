<?php
/**
 * This example shows making an SMTP connection without using authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require_once 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.graphlertech.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "test@graphlertech.com";
//Password to use for SMTP authentication
$mail->Password = "winlinux";
//Set who the message is to be sent from
$mail->setFrom('test@graphlertech.com');
//Set an alternative reply-to address
$mail->addReplyTo('test@graphlertech.com');
//Set who the message is to be sent to
$mail->addAddress('gnanamoorthi@bworks.in');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP without auth test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('Hi this is final call for the test');
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('upload/carbon.jpg');
//send the message, check for errors
if ($mail->send()) {
    /* echo "Mailer Error: " . $mail->ErrorInfo;*/ 
    echo "Mailer Error: ";
} else {
    echo "Message sent!";
}