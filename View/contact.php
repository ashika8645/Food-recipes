<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'khaidinhdang@gmail.com';
    $mail->Password = 'goxyvrwvvcdwlyau';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress('khaidinhdang@gmail.com');
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $message;
    $mail->send();

    header("Location: ./index.php?pg=contact");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

</head>

<body>
    <div class="container">
        <div class="contact">
            <div class="contact-heading">
                Contact us
            </div>
            <div class="contact-content">
                <div class="contact-image">
                    <img src="../layout/images/Rectangle 2.png" alt="">
                </div>
                <form method="post" class="contact-form">
                    <div class="contact-group">
                        <input type="hidden" name="id" value="">
                        <div class="contact-label">Name</div>
                        <input type="text" name="name" placeholder="Enter your name..." class="contact-input" required>
                    </div>
                    <div class="contact-group">
                        <div class="contact-label">Email</div>
                        <input type="text" name="email" placeholder="Your email address..." class="contact-input" required>
                    </div>
                    <div class="contact-group">
                        <div class="contact-label">subject</div>
                        <input type="text" name="subject" placeholder="Enter subject..." class="contact-input" required>
                    </div>
                    <div class="contact-group">
                        <div class="contact-label">Enquiry type</div>
                        <input type="text" name="enquiry" placeholder="Enter enquiry type..." class="contact-input" required>
                    </div>
                    <div class="contact-group">
                        <div class="contact-label">Messages</div>
                        <textarea name="message" placeholder="Enter your messages..." class="contact-texterea" required>
                    </textarea>
                        <div class="contact-group">
                            <button class="contact-button" name="send">submit</button>
                        </div>
                </form>
            </div>
        </div>

    </div>
    <?php
    include("subscribe.php");
    ?>
</body>

</html>