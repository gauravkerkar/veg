<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
if(isset($_POST['submit'])) {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                        // Specify SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';               // SMTP username
    $mail->Password = '';                        // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `SSL` also accepted
    $mail->Port = 587;                                    // TCP port to connect to 587 = `TLS` or 465 = `SSL`

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['first_name']);
    $mail->addAddress('nmvekp09@gmail.com', 'Vaman');

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST['subject'];                   // Set mail subject
    $mail->Body = $_POST['discription'];

    $mail->send();
    echo '<script>alert("Message has been sent. We will contact you shortly!")</script>';
}

?>