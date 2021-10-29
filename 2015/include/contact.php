<?php 

if( !isset($_POST["submit"]) ) {
$nom = '';
$email = '';
$message = '';
$error = array();
}

?>

	<section id="contact" class="contact-container">
		<div>

			<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>#contact">
				<fieldset>
					<legend class="oswald">Contact Me</legend>
					<?php  if(isset($message_status)){echo $message_status;}?>
					<p class="field">
						<?php 
				if (isset($error['nom'])) {
				echo '<span class="oswald o400 error"> - ' . $error['nom'] . '</span><br>';
			}
						?>
						<label class='oswald' for="nom">Nom</label>
						<input value ="<?php echo $nom; ?>" placeholder="Nom" type="text" name="nom" id="nom"  >
					</p>

					<p class="field">
						<?php 
	if (isset($error['email'])) {
		echo '<span class="oswald o400 error"> - ' . $error['email'] . '</span><br>';
	}
						?>
						<label class='oswald' for="email">Email</label>
						<input  value ="<?php echo $email; ?>" placeholder="Email" type="text" name="email" id="email" required >
					</p>
					<p class="field">
						<?php 
	if (isset($error['message'])) {
		echo '<span class="oswald o400 error"> - ' . $error['message'] . '</span><br>';
	}
						?>		
						<label class='oswald' for="message">Message</label>
						<textarea rows='4' name="message" placeholder="Message" id="message" required><?php echo $message; ?></textarea>
					</p>
					<input class="lobster" type="submit" name="submit" value="Envoyer">
				</fieldset>
			</form>
			
		</div>
		</section>