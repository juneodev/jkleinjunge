<?php 
if ( isset( $_POST["submit"] ) ) {
	$nom = $_POST["nom"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$error = array();


	if ( !empty( $_POST["nom"] ) ) { // Si le champ n'est pas vide
		$nom = $_POST["nom"]; // On attribut la variable	
	} else { // Sinon mettre message d'erreur dans le tableau $error
		$error[ "nom" ] = "Veuillez renseigner votre nom.";
	}

	if ( empty( $_POST["email"] ) ) { // Si le champ est vide
		$error[ "email" ] = "Veuillez renseigner votre adresse email.";

	} else { // Sinon

		if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false){ // Si le mail est valide
			$email = $_POST["email"]; // On attribut la variable	
		} else {
			$email = $_POST["email"];
			$error[ "email" ] = "L'adresse renseignée n'est pas valide.";
		}
	}

	if ( !empty( $_POST["message"] ) ) { // Si le champ n'est pas vide
		$message = $_POST["message"]; // On attribut la variable	
	} else { // Sinon mettre message d'erreur dans le tableau $error
		$error[ "message" ] = "Le message est necessaire.";
	}


	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $email)) // On filtre les serveurs qui rencontrent des bogues.
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}

	if(empty($error)) { 

		require_once("phpmailer/PHPMailerAutoload.php");

		$mail = new PHPMailer();

		//$mail->IsHTML(true);

		$mail->CharSet = 'UTF-8';

		$mail->IsSMTP();  // telling the class to use SMTP
		$mail->Host     = "smtp.numericable.fr"; // SMTP server
		//$mail->SMTPDebug = 1;

		$mail->From     = "noreply@belleprovence.com";
		$mail->FromName = "JKleinJunge's Website";
		$mail->AddAddress("cuneo.jeremie@gmail.com");

		$mail->AddEmbeddedImage('img/entetemail.png', 'entetemail');

		$mail->Subject  =   "Nouveau message - De : $nom";
		$mail->Body     =   //"<img src='cid:entetemail'>".$passage_ligne.
			"Un nouveau message est arrivé de la part de  : ".$passage_ligne.
			'Nom : '.$nom .$passage_ligne.
			'Adresse email : ' . $email . $passage_ligne.
			'-------------------------------------------------'.$passage_ligne.
			'-------------------------------------------------'.$passage_ligne.
			'Message : ' . $message .$passage_ligne. 
			'-------------------------------------------------'.$passage_ligne.
			'-------------------------------------------------'
			;

		$mail->WordWrap = 100;

		if(!$mail->Send()) {
			$message_status = '<span class="oswald o400 error"> - Votre message a rencontré une erreur et n\'a pas pu être envoyé à son destinataire.</span><br>
			<span class="oswald o400 error">Mailer error: ' . $mail->ErrorInfo . "</span>";
		} else {
			$message_status = '<span class="oswald o400 error">Votre message a bien été envoyé, et sera traité dans les plus brefs délais. Merci de votre visite.</span>';
		}

	}
}
?>



















