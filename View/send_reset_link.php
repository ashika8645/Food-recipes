<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$email = $_POST["email"];
function generateRandomPassword($length = 6)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($characters) - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}

$newPassword = generateRandomPassword(6);
$_SESSION['newPassword'] = $newPassword;
$_SESSION['email'] = $email;
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Username = 'khaidinhdang@gmail.com';
$mail->Password = 'goxyvrwvvcdwlyau';
$mail->Port = 465;
$mail->SMTPSecure = "ssl";

$mail->setFrom('khaidinhdang@gmail.com', 'ashika');
$mail->addAddress($email);

$mail->isHTML(true);
$mail->Subject = 'Verification Code';

$mail->Body = '
    <html>
    <head>
        <style>
            .verification-code {
                background-color: #333;
                color: #fff;
                font-size: 24px;
                padding: 10px;
                border-radius: 5px;
                text-align: center;
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <p>Your verification code:</p>
        <div class="verification-code">' . $newPassword . '</div>
    </body>
    </html>
';

if (!$mail->send()) {
    echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
}

header("Location: index.php?pg=verification_code");

$mail->smtpClose();
?>
