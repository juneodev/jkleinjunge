<?php 
$errors = array();
$status = '';
$name = '';
$email = '';
$message = '';
$skills_state= '';
$contact_state= 'dis-none';

if (isset($_POST['submit']) && empty($_POST['object'])) {

	$errors = array();

	$contact_state= '';
	$skills_state= 'dis-none';

	$name =  $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	if (empty($name)) {
		array_push($errors, 'Il manque le nom');
	}
	if (empty($email)) {
		array_push($errors, 'Il manque l\'adresse email');
	}
	if (empty($message)) {
		array_push($errors, 'Il manque le message');
	}
	if (preg_match("/<[^>]+>/", $message)) {
		array_push($errors, 'Erreur, le message n\'est pas valide');
	}
	if (strstr($message, "http://")) {
		array_push($errors, 'Erreur, le message n\'est pas valide');
	}

	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
		array_push($errors, 'l\'adresse email n\'est pas valide');
	}

	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $_POST['email'])) // On filtre les serveurs qui rencontrent des bogues.
	{
		$passage_ligne = "\r\n";
	}
	else
	{
		$passage_ligne = "\n";
	}

	if(empty($errors)) { 

		$to = "cuneo.jeremie@gmail.com";
		$subject = "Un nouveau message est arrivé.";

		$mail = "
<html>
<head>
<title>A New Message Arrived</title>
</head>
<body>
<table>
<tr>
<th>email : </th>
<th>$email</th>
</tr>
<tr>
<td>name :</td>
<td>$name</td>
</tr>
<tr>
</tr>
<tr>
</table>
<p>message : $message</p>
</body>
</html>
";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: jkleinjunge.com' . "\r\n";

		if(mail($to,$subject,$mail,$headers)) {
			$status = 'success';
			array_push($errors, 'Le mail à été envoyé, merci !');
		} else {
			$status = 'error';
			array_push($errors, 'Le mail à été envoyé, merci !');
		}
	} else {
		$status = 'error';
	}
}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>Jérémie Cunéo | Développeur, Designer</title>
		<link rel="shortcut icon" href="img/JKJ2017_favicon.png">
		<link rel="stylesheet" href="css/main.css">
		<script src="https://use.fontawesome.com/f444c17e99.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="js/min/main.min.js"></script>
	</head>
	<body>	
		<header>
			<nav class="m-auto flex">
				<a class="logo" href="/"><img src="img/JKJ2017_logo.png" alt="JKJ 2017 Logo"></a>
				<a class="drop-down-button"></a>
				<ul>
					<li><a class="nav-link" data-link-value="skills" href="#">Skills</a></li>
					<li><a class="nav-link" data-link-value="work" href="#">Work</a></li>
					<li><a class="nav-link" data-link-value="about-me" href="#">About Me</a></li>
					<li><a class="nav-link" data-link-value="contact" href="#">Contact</a></li>
				</ul>				
			</nav>
			<div class="mobile-nav">
				<ul>
					<li><a class="nav-link font-hr" data-link-value="skills" href="#">Skills</a></li>
					<li><a class="nav-link font-hr" data-link-value="work" href="#">Work</a></li>
					<li><a class="nav-link font-hr" data-link-value="about-me" href="#">About Me</a></li>
					<li><a class="nav-link font-hr" data-link-value="contact" href="#">Contact</a></li>
				</ul>
			</div>
		</header>		
		<main>
			<div id="jumbotron" class="skills-jumb <?= $skills_state; ?>">
				<h2 class="skills-title font-msb">Hey, je m'apelle <em class="font-hr"> Jérémie</em>, et je suis : </h2>
				<h2 class="work-title font-msb dis-none">et <em class="font-hr"> Voici </em> quelques travaux : </h2>
				<h2 class="about-me-title font-msb dis-none"><em class="font-hr">Ensuite, </em>  un peu sur moi : </h2>
				<h2 class="contact-title font-msb dis-none"> et <em class="font-hr"> Enfin</em>, un moyen de me contacter : </h2>
			</div>
			<section id="skills-content" class="main-container m-auto <?= $skills_state; ?>">
				<article class="flex">
					<img src="img/JKJ2017_web-developement_illustration.png" alt="???????????????????????????????????????????">
					<div>
						<h3 class="font-hr">Web Developer</h3>
						<h4 class="font-msb">Développement & Programmation Web</h4>
						<p>J’effectue la réalisation technique et le développement informatique
							d'un site web. A l'aide du cahier des charges, je programme les
							fonctionnalités qui correspondent aux besoins du client pour son site web.</p>
						<ul>
							<span><abbr title="PHP">PHP</abbr></span>
							<span><abbr title="MySql">MySql</abbr></span>
							<span><abbr title="JavaScript">JavaScript</abbr></span>
							<span><abbr title="JQuery">JQuery</abbr></span>
							<span><abbr title="ReactJS">ReactJS</abbr></span>
							<span><abbr title="Symfony">Symfony</abbr></span>
							<span><abbr title="Git">Git</abbr></span>
							<span><abbr title="Wordpress">Wordpress</abbr></span>
						</ul>
					</div>
				</article>
				<article class="flex">
					<div>
						<h3 class="font-hr">Web Designer</h3>
						<h4 class="font-msb">UI/UX, Ergonomie</h4>
						<p>Je suis chargé de concevoir et de réaliser l'identité visuelle
							d'un site Internet.  J’ interviens sur la définition du cahier
							des charges : arborescence, architecture et ergonomie
							du site, interactivité ainsi que l’élaboration de la charte graphique.</p>
						<ul>
							<span><abbr title="HTML5">HTML5</abbr></span>
							<span><abbr title="CSS3">CSS3</abbr></span>
							<span><abbr title="Bootstrap">Bootstrap</abbr></span>
							<span><abbr title="Sass">Sass</abbr></span>
							<span><abbr title="Responsive design">Responsive design</abbr></span>
						</ul>
					</div>
					<img src="img/JKJ2017_webdesign_illustration.png" alt="???????????????????????????????????????????">
				</article>
				<article class="flex">
					<img src="img/JKJ2017_print-design_illustration.png" alt="???????????????????????????????????????????">
					<div>
						<h3 class="font-hr">Print Designer</h3>
						<h4 class="font-msb">Graphisme, Design & Compositions graphiques</h4>
						<p>J’interviens dans le champ de la communication visuelle.
							Je m’occupe de l’ensemble des supports imprimés utilisés en 
							publicité / marketing comme les catalogues, flyers, affiches,
							cartes de visite, ect...</p>
						<ul>
							<span><abbr title="Photoshop">Photoshop</abbr></span>
							<span><abbr title="Illustrator">Illustrator</abbr></span>
							<span><abbr title="inDesign">inDesign</abbr></span>
						</ul>
					</div>
				</article>
			</section>
			<section id="work-content" class="main-container m-auto dis-none">
				<article class="flex fc-website f-left">				
					<a target="_blank" href="http://www.fenuacreations.pf/"><img src="img/JKJ2017_FC-website-screenshot.png" alt="?????????????????????????????????????????????"></a>			
					<div>
						<h3 class="font-hr">Fenua Creations</h3>
						<h4 class="font-msb">Website</h4>
						<p>
							Création d'un site web pour la société tahitienne
							Fenua Créations, imprimerie d'étiquettes, stickers,
							cartes de visites et bien plus.
						</p>
					</div>
				</article>
				<article class="flex ld-website  f-right">				
					<a target="_blank" href="http://www.luciddreamprod.com/"><img src="img/JKJ2017_LD-website-screenshot.png" alt="?????????????????????????????????????????????"></a>				
					<div>
						<h3 class="font-hr">Lucid dream Prod</h3>
						<h4 class="font-msb">Website</h4>
						<p>
							Création d'un site web pour Lucid Dream Prod,
							société audiovisuel Polynésienne, basée à Tahiti.
						</p>
					</div>
				</article>
				<article class="flex fl-website f-left">				
					<a target="_blank" href="http://www.panomania.io/Flyolo/"><img src="img/JKJ2017_FL-website-screenshot.png" alt="?????????????????????????????????????????????"></a>				
					<div>
						<h3 class="font-hr">Flyolo</h3>
						<h4 class="font-msb">Website</h4>
						<p>
							Création d'un site dans le cadre de l'examen de fin de formation de Webmaster.
							Flyolo permet d'obtenir des suggestions de vols en fonction d'un budget et d'une date définis.
						</p>
					</div>
				</article>
				<article class="flex bp-website f-right">				
					<a target="_blank" href="http://www.belle-provence.fr"><img src="img/JKJ2017_BP-website-screenshot.png" alt="?????????????????????????????????????????????"></a>				
					<div>
						<h3 class="font-hr">Belle-Provence Minibus</h3>
						<h4 class="font-msb">Website</h4>
						<p>
							Refonte du design et création du site web
							pour la société de transport Belle Provence Minibus Deluxe.
					</div>
				</article>
				<article class="flex desqq-website f-left">				
					<a target="_blank" href="http://www.desqq.com"><img src="img/JKJ2017_desqq-website-screenshot.png" alt="?????????????????????????????????????????????"></a>				
					<div>
						<h3 class="font-hr">Desqq</h3>
						<h4 class="font-msb">Website</h4>
						<p>
							Projet personnel : création d'un outil d'organisation permettant d'ajouter, déplacer, modifier et supprimer des notes ou listes de tâches.
					</div>
				</article>
				<article class="flex f-right">
					<div class="lightbox"></div>
					<div>
						<h3 class="font-hr">Compositions Graphiques</h3>
						<h4 class="font-msb">Print design</h4>
						<p>
							Créations graphiques
							sur lesquelles j’ai pu travailler dans le
							contexte scolaire ou professionnel.
					</div>
				</article>
			</section>
			<section id="about-me-content" class="main-container m-auto dis-none">
				<div class="intro flex">
					<img src="img/JKJ2017_about-me-picture.png" alt="Photo de moi">
					<p class="font-msb">Hey, je m’apelle <em class="font-msb">Jérémie Cunéo</em>,
						je suis designer et développeur,
						basé à <em class="font-msb">Marseille</em>.</p>
				</div>
				<article class="columns">
					<p>
						Grâce à mes formations de webmaster et d’infographiste en multimédia,
						je peux me permettre d’être polyvalent, mais je me défini plus comme un
						développeur back-end avec une sensibilité graphique.
					</p>
					<h5 class="font-msb">
						Mais où je me situe vraiment techniquement ?
					</h5>
					<p>
						Je suis à l’aise avec les outils de PAO grâce à ma formation
						d’infographiste en multimédia, ce qui me permet de devenir webdesigner sans problème lorsque c’est nécéssaire.
					</p>
					<p>
						Je suis à toute épreuve en intégration HTML et CSS avec un bon niveau en Javascript.
						Mais j’aime me mettre en danger, par exemple avec l’apprentissage de ReactJs.
					</p>
					<p class="font-msb">
						Toutefois, je reste le plus performant coté serveur avec une bonne connaissance de PHP,
						de MySql, et avec de bonnes bases sur CMS et framework type WordPress ou Symfony2.
					</p>
					<p>
						Je suis un touche à tout et un auto-didacte dans l’âme. Et si nécéssaire, je
						peux me mettre à jour rapidement avec une techno si demandé.
					</p>
					<p class="font-msb">
						Je vous laisse jeter un coup
						d’oeil à mon CV :
					</p>
					<a target="_blank" href="img/JKJ2017_resume.pdf">
						<img src="img/JKJ2017_resume-icon.png" alt="Resume icon">
					</a>
				</article>
				<article class="trainings flex">				 
					<img src="img/JKJ2017_trainings-icon.png" alt="Trainings and school icon">
					<div>
						<h5 class="font-msb">Formations :</h5>
						<p class="font-msr">- Titre Professionel de Webmaster niveau bac +2 <span class="font-msb"><br> 2015/2016</span></p>
						<br>
						<p class="font-msr">- Titre Professionnel d’infographiste en Multimédia niveau bac + 2  <span class="font-msb"><br> 2014/2015</span></p>
					</div>
				</article>
				<article class="work-exp flex">
					<div>
						<h5>Experiences Professionnelles : </h5>
						<ul>
							<li>
								<p>- Infographiste Emballages</p>
								<p class="loc"><span class="font-msb"> Pak Emballages, Packaging</span> 13015 Marseille</p>
								<p class="font-msb"> 2015/2016</p>

							</li>
							<br>
							<li>
								<p>- Infographiste et technicien en imprimerie</p>
								<p class="loc"> <span class="font-msb"> Fenua Créations,</span> Papeete TAHITI</p>
								<p class="font-msb"> 2014/2015</p>
							</li>
						</ul>
					</div>
					<img src="img/JKJ2017_work-exp-icon.png" alt="Work experiences icon">
				</article>
			</section>
			<section id="contact-content" class="main-container m-auto <?= $contact_state; ?>">
				<h3 class="font-hr">Contactez-moi !</h3>
				<div class="<?= $status; ?>">
					<?php foreach($errors as $error){?>
					<p><?= $error; ?></p>
					<?php } ?>
				</div>
				<form method="POST" action="">
					<input name="name" placeholder="Nom" type="text" value="<?= $name ;?>">
					<input name="email" placeholder="Email" type="text" value="<?= $email ;?>">
					<textarea name="message" placeholder="Message" name="" id="" cols="30" rows="5"><?= $message ;?></textarea>
					<input style="display:none" name="object" placeholder="object">
					<input name="submit" value="Envoyer" type="submit">
				</form>
			</section>
		</main>
		<footer class="flex">
			<address>
				<p class="font-hr name">Jérémie Cunéo</p>
				<p><i class="fa fa-phone" aria-hidden="true"></i> 06 47 32 42 04</p>
				<p><i class="fa fa-envelope" aria-hidden="true"></i> cuneo.jeremie@gmail.com</p>
				<p><i class="fa fa-home" aria-hidden="true"></i> 18, Parc dromel - 13009 Marseille</p>
				<p class="font-msb">
					Jkleinjunge © 2017 COPYRIGHT 
					All rights reserved.
				</p>
			</address>
			<div class="social-networks">
				<ul>
					<li><a target="_blank" href="https://plus.google.com/u/0/105023082921276418913"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a target="_blank" href="https://fr.linkedin.com/in/jérémie-cunéo-8497999a"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					<li><a target="_blank" href="https://twitter.com/JKleinJunge"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a target="_blank" href="https://www.facebook.com/Jkleinjunge/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div>
				<ul class="f-right">
					<li><a data-link-value="skills" class="font-hr nav-link" href="#">Skills</a></li>
					<li><a data-link-value="work" class="font-hr nav-link" href="#">Work</a></li>
					<li><a data-link-value="about-me" class="font-hr nav-link" href="#">About me</a></li>
					<li><a data-link-value="contact" class="font-hr nav-link" href="#">Contact</a></li>
				</ul>
			</div>
		</footer>
	</body>
</html>