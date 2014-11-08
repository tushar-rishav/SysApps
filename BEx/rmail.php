<?php
require_once 'class.phpmailer.php';
$cc=$_GET['code'];
$uname=$_GET['user'];
$maile=$_GET['email'];
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
// or try these settings (worked on XAMPP and WAMP):
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';

$mail->Username = "book.kart123@gmail.com";
$mail->Password = "Bookkart123";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "Book.kart123@gmail.com";
$mail->FromName = "Book-kart";

$mail->addAddress("$maile","User 1");


$mail->Subject = "Book-kart verification link";
$link="http://delta.nitt.edu/~ash/securimage/verify.php?r=".$uname."&cc=".$cc."";
$mail->Body = "Hi".$name.",<br /><br />This is from Book-kart.Thank you for registering .To verify your account please <a href=".$link.">Click here to verify your account </a>";

if(!$mail->Send())
    echo "Message was not sent <a href='rmail.php?code=".$cc."&user1=".$uname."'>Resend mail</a>";
else
    echo "Verification message has been mailed";
  


?>