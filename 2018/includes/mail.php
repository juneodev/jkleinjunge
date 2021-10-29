<?php
/**
 * Created by PhpStorm.
 * User: ggdu1
 * Date: 16/01/2018
 * Time: 17:12
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if (isset($_POST['mail_send'])) {


    $errors = [];

    if (empty($_POST['mail_name'])) {

        $errors[] = 'Le nom est obligatoire';

    }
    if (empty($_POST['mail_email'])) {

        $errors[] = "L'email est obligatoire";

    }
    if (empty($_POST['mail_message'])) {

        $errors[] = 'Le contenu du message ne doit pas être vide';

    }
    if (!empty($_POST['mail_5qv16er'])) {

        $errors[] = 'Il y a eu une problème avec le formulaire.';
    }

    if (!filter_var($_POST['mail_email'], FILTER_VALIDATE_EMAIL)) {

        $errors[] = "L'email n'est pas valide";

    }

    if (count($_POST['mail_message']) > 1200) {

        $errors[] = 'Ce message est trop long';

    }

    if (empty($errors)) {

        $message = $_POST['mail_message'];
        $email = $_POST['mail_email'];
        $name = $_POST['mail_name'];


        $to = "cuneo.jeremie@gmail.com";
        $subject = $_POST['mail_name'] . ' a envoyé un message';

        $message = "<html><head></head><body><ul><li><b>Email : </b> $email </li> <li><b>Message : </b> $message </li></ul></body></html>";

        $mail = new PHPMailer(true);

        //Server settings
        $mail = new PHPMailer(); // create a new object
        $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "cuneo.jeremie@gmail.com";
        $mail->Password = "$4%7nzMq5*THC";
        $mail->SetFrom("website@jkleinjunge.com");
        $mail->Subject = $name;
        $mail->Body = $message;
        $mail->AddAddress("cuneo.jeremie@gmail.com");

        if (!$mail->Send()) {
            $errors[] = "Il y a eu une erreur lors de l'envoie du message";
            $errors[] = "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $success = "Le message a bien été envoyé, merci !";
        }


    }

}


