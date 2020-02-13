<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

$host = $_POST['host'];
$port = $_POST['port'];
$username = $_POST['username'];
$password = $_POST['password'];
$from = $_POST['from'];
$to = $_POST['to'];
$subject = $_POST['subject'];


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
    $mail->isSMTP(); 
    $mail->XMailer = ' ';
    $mail->CharSet = 'UTF-8';
    $mail->Timeout = 10;
    $mail->SMTPKeepAlive = true;
    // Send using SMTP
    $mail->Host       = $host;                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $username;                     // SMTP username
    $mail->Password   = $password;                               // SMTP password
    $mail->Port       = $port;                                    // TCP port to connect to
    
//    $mail->addCustomHeader('In-Reply-To', '<CAKqPEnWcAXZMQeFe+OSV4ugUdHrzCvpySrTCBJEjpUpSjLJRgA@mail.gmail.com>');
//    $mail->addCustomHeader('References', '<CAKqPEnWcAXZMQeFe+OSV4ugUdHrzCvpySrTCBJEjpUpSjLJRgA@mail.gmail.com>');

    //Recipients
    $mail->setFrom($from, 'Castro Nova');
    $mail->addAddress($to);     // Add a recipient

    $mail->MessageID = '<CAKqTUnVzTdq1M2P9R3QA8Lpr8kEW0+Mga2ye1Q=8JSOohyUT1w@'.$host.'>';

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = "see myself <a href='#'>my profile</a>";
    $mail->AltBody = "see myself my profile";
    
    $mail->addAttachment("uploads/7.png");
    $mail->addAttachment("uploads/8.png");
    $mail->addAttachment("uploads/9.png");

    $mail->send();
    $mail->SmtpClose();
    echo 'Message has been sent';


