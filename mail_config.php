<?php

  require 'PHPMailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'intrellatechnologies@gmail.com';                 // SMTP username
  $mail->Password = 'passwordpassword';                           // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465; 
  $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


  $mail->setFrom('intrellatechnologies@gmail.com', 'Water Supply System');
  $mail->isHTML(true);
  
 ?>
