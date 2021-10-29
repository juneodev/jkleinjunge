<?php 

if( !isset($_POST["submit"]) ) {
$nom = '';
$email = '';
$message = '';
$error = array();
}

?>

	<section id="contact" class="contact-container">
		<h3 class="nh-m">Contact</h3>
		<div>

			<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>#contact">
				<fieldset>
					
					<?php  if(isset($message_status)){echo $message_status;}?>
					<p class="field">
						<?php 
				if (isset($error['nom'])) {
				echo '<span class="nh-t error"> - ' . $error['nom'] . '</span><br>';
			}
						?>
						<label class='nh-m' for="nom">Nom</label>
						<input value ="<?= $nom; ?>" placeholder="<?= $input_name;?>" type="text" name="nom" id="nom"  >
					</p>

					<p class="field">
						<?php 
	if (isset($error['email'])) {
		echo '<span class="nh-t error"> - ' . $error['email'] . '</span><br>';
	}
						?>
						<label class='nh-m' for="email">Email</label>
						<input  value ="<?= $email; ?>" placeholder="Email" type="text" name="email" id="email" required >
					</p>
					<p class="field">
						<?php 
	if (isset($error['message'])) {
		echo '<span class="nh-t error"> - ' . $error['message'] . '</span><br>';
	}
						?>		
						<label class='nh-m' for="message">Message</label>
						<textarea rows='4' name="message" placeholder="Message" id="message" required><?= $message; ?></textarea>
					</p>
					<input class="nh-m" type="submit" name="submit" value="<?= $input_submit; ?>">
				</fieldset>
			</form>
			
		</div>
		</section>