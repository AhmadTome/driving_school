<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



session_start();
require_once ('connection.php');
$conn = getConnection();

$email = $_POST['email'];
$code = sendEmail($email);



$query = "INSERT INTO `email_verify`(`email`, `code`) VALUES ('". $email ."','". $code ."')";
$result = $conn->query($query);
if ($result) {
    echo "تم ارسال رمز التحقق بنجاح";
} else {
    echo "لم تم ارسال رمز التحقق ";
}






function sendEmail($email)
{

//Load Composer's autoloader
    require '../vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = 'mohammadDrivingSchool2000@gmail.com';
        $mail->Password = 'mohammad$123';
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;

        $mail->setFrom("mohammadDrivingSchool2000@gmail.com", 'test');
        $mail->addAddress($email);

        //Content
        $random = mt_rand(100000, 999999);
        $message = "The code is : ". $random;

        $mail->isHTML(true);
        $mail->Subject = "The code is : ";
        $mail->Body = $message;
        $mail->AltBody = '';

        $mail->send();
        return $random;
        echo 'Message has been sent';
    } catch (Exception $e) {
        return 0000;
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
