<?php
    //source : https://github.com/PHPMailer/PHPMailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require "config.php";

    if(!empty($_POST)){
        $subject=$_POST["subject"];
        $message=$_POST["message"];

        $mailer=new PHPMailer(true);
        try{
            $mailer->isSMTP();
            $mailer->SMTPAuth=true;
            $mailer->SMTPSecure="tls"; // veya ssl de denilebilir
            $mailer->Port=$port;
            $mailer->Host=$host;
            $mailer->Username=$username;
            $mailer->Password=$password;

            $mailer->Subject=$subject;
            $mailer->Body=$message;

            $mailer->addAddress("info@info.com");
            $mailer->send();

            echo "mail gönderildi";
        }catch(Exception $e){
            echo "mail hatası ".$mailer->ErrorInfo;
        }
    }
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.7/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="subject" class="form-label">Konu</label>
                <input type="text" name="subject" id="subject" class="form-control">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Mesaj</label>
                <textarea name="message" id="message" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="sendEmail">Gönder</button>
        </form>
    </div>
</body>
</html>