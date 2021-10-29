<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);
  
  if ($name == "" OR $email == "" OR $message == "") {
	  echo "<head>
	  		<meta name='robots' content='noindex, nofollow' />
			<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1,0'/>
        	<link rel='shortcut icon' type='image/png' href='JKJ-favicon.png' />
			<meta charset='utf-8'>
			<title>I'm a Webdeveloper</title>
			<link href='reset.css' rel='stylesheet' type='text/css'>        
			<link href='Main-mobile.css' rel='stylesheet' type='text/css'>
	  		</head>
	  		<div class='thank-you'>
        	<a href='index.php'><img src='JKJ-Facebook-profile-picture.png'></a>
        	<p>Vérifiez bien votre Nom, Adresse Email et Message !</p>
     	 	</div>
			";
	  exit;
	  }
	  
  foreach( $_POST as $value ){
	  if( stripos($value, 'Content-Type:') !== FALSE ){
	  echo "<div class='thank-you'>
        	<a href='index.php'><img src='JKJ-Facebook-profile-picture.png'></a>
        	<p>Il y a eu un problème lors de l'envoie du message !</p>
     	 	</div>
			";
		  exit;
	  }
  }
  
  if ($_POST["address"] != "") {
	  echo "<head>
	  		<meta name='robots' content='noindex, nofollow' />
 			<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1,0'/>
       		<link rel='shortcut icon' type='image/png' href='JKJ-favicon.png' />
			<meta charset='utf-8'>
			<title>I'm a Webdeveloper</title>
			<link href='reset.css' rel='stylesheet' type='text/css'>        
			<link href='Main-mobile.css' rel='stylesheet' type='text/css'>
	  		</head><div class='thank-you'>
        	<a href='index.php'><img src='JKJ-Facebook-profile-picture.png'></a>
        	<p>Il y a eu un problème lors de l'envoie du message !</p>
     	 	</div>
			";
	  exit;  
  }
 
  $email_body = "";
  $email_body = $email_body . "Un message est arrivé de la part de :\n" . $name . ",\n";
  $email_body = $email_body . "dont l'addresse email est :\n" . $email . ",\n";
  $email_body = $email_body . "et dont le message est :\n'" . $message . "' .";
  
  
  $my_email = "ggdu13009@hotmail.fr";


if(mail($my_email, "JKleinjunge", $email_body)) {
  echo "envoyé";
} else {
  echo "non envoyé";
}

  header("Location: index-mobile.php?status=thanks");
  exit;
  
}
?>
<!DOCTYPE>	
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Mobile Menu CSS</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1,0"/>
		<link rel="stylesheet" type="text/css" media="screen" href="main-mobile.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="Drop-down-menus.css"/>		
		<link rel="stylesheet" type="text/css" media="screen" href="reset.css"/>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});
			$(".nav-button").click(function () {
			$(".jkj-logo,.language-nav").removeClass("open-language");
			});   
		});
		</script>
		<script>
		$(document).ready(function(){
			$(".jkj-logo").click(function () {
			$(".jkj-logo,.language-nav").toggleClass("open-language");
			});
			$(".jkj-logo").click(function () {
			$(".nav-button,.primary-nav").removeClass("open");
			});   
		});
		</script>		
	</head>
	<body>
		<button class="nav-button open-menu">Toggle Navigation</button>
		<button class="jkj-logo open-menu-language">JKJ button</button>		
		<ul class="primary-nav">
			<li class="skills-li"><a href="#skills">My Skills</a></li>
			<li class="blue work-li"><a href="#work">My Works</a></li>
			<li class="red about-me-li" ><a href="#about-me">About Me</a></li>
			<li class="green contact-li"><a href="#contact">Contact</a></li>
		</ul>
		<ul class="language-nav">
			<li class="french-version"><a href="index-mobile.php">Français</a></li>
			<li class="english-version"><a href="index-mobile-en.php">English</a></li>			
		</ul>
		<div class="main-wrapper">
			<div class="main-image">
			</div>

<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>

      <div class="thank-you">
        <a href="index-mobile.php"><img src="JKJ-Facebook-profile-picture.png"></a>
        <p>Merci pour votre message, Je repondrai au plus vite !</p>
      </div>
     </body>
    </html>

<?php } ?>

			<div class="my-skills-part">
				<a name="skills"/>  
				<div class="my-skills-title">
					<h2>My Skills :</h2>
				</div>
				<ul class="list-skills-container">
					<li class="list-skills">
						<img src="Pictures Folder/My Skills Pictures/JKJ-Front-html-logo.png"/>
						<p>HTML, pour "HyperText Markup Language" 
							est le language standard utilisé pour 
							créer des pages web.
						</p>
					</li>
					<li class="list-skills">
						<img src="Pictures Folder/My Skills Pictures/JKJ-Front-css-logo.png"/>
						<p>CSS ou “Cascading Style Sheets" est le 
							language utilisé avec HTML pour 
							styliser les pages web.
						</p>
					</li>
					<li class="list-skills">
						<img src="Pictures Folder/My Skills Pictures/JKJ-Front-javascript-logo.png"/>
						<p>JAVASCRIPT est un language de 
							programmation orienté-objet, 
							et utilisé avec HTML pour rendre les pages web interatives.
						</p>
					</li>										
					<li class="list-skills">
<! Trop grand ->		<img style="height: 20px;" src="Pictures Folder/My Skills Pictures/JKJ-Front-jquery-logo.png"/>
						<p>Query est une bibliothèque JavaScript créée
						 pour faciliter l'écriture de scripts côté-client
						  dans le code HTML des pages web. jQuery est la
						   bibliothèque JavaScript la plus utilisée aujourd'hui.
						</p>
					</li>
					<li class="list-skills">
						<img src="Pictures Folder/My Skills Pictures/JKJ-Front-wordpress-logo.png"/>
						<p>WordPress est un moteur de blog avec système 
							de gestion de contenu ou CMS (Content management system). 
							Libre et écrit en PHP, reposant sur une base de données MySQL.
						</p>
					</li>
					<li style="padding-top: 15px;"class="list-skills">
<! Trop grand->		<img style="height: 25px;" src="Pictures Folder/My Skills Pictures/JKJ-Front-php-logo.png"/>
						<p>PHP est le language de programmation fonctionnant 
							coté-serveur crée pour le développement web, le 
							language coté-serveur le plus utilisé sur le web 
							actuellement.
						</p>
					</li>
					<li class="list-skills">
						<img src="Pictures Folder/My Skills Pictures/JKJ-Front-bootstrap-logo.png"/>
						<p>Twitter Bootstrap est une collection d'outils
						 utile à la création de sites web et applications
						  web qui contient un ensemble de codes
						   HTML et CSS préfaits.
						</p>
					</li>
				</ul>
			</div>
			<div class="my-work-part">
				<a name="work"/>  			
				<div class="my-work-title">
					<h2>My Works :</h2>
				</div>
				<ul class="site-container">
					<li class="site">
						<img style="width: 220px;" src="JKJ-Fenua-Creations-site-picture.png"/>
						<img src="JKJ-Fenua-creations-logo.png">
						<p>FENUA Creations est une société d'impression d'étiquettes basée
						   sur Tahiti, Polynésie Française. Où l'on crée et imprime étiquettes,
						   stikers, cartes de visite et beaucoup plus.
						</p>
					</li>
					<li class="site">
						<img style="width: 200px" src="JKJ-Tikaito-site-picture.png"/>
						<img src="JKJ-Tikaito-logo.png">
						<p>TIKAITO, un projet de film pensé par LUCID DREAM PROD.,
						   une boîte de production sur Tahiti, Polynésie Française.
						   Ni le film ni le site internet n'ont été terminé pour l'instant.
						</p>
					</li>
				</ul>
			</div>
			<div class="about-me-part">
				<a name="about-me"/>
				<div class="about-me-title">
					<h2>About Me :</h2>
				</div>
				<img src="JKJ-Face-Picture-mobile.png">
				<p>Bonjour je m'appelle Jérémie Cunéo! Je suis Développeur Web
				   en Freelance basé sur Marseille, France.</p>
			</div>
			<div class="contact-part green">
				<a name="contact"></a>
				<div class="contact-title">
					<h2>Contact :</h2>                             
                </div>
                <div class="contact-form">
                  	<form class="form-font-style" method="post" action="index-mobile.php">
						<label for="name"></label>
						<h4>Votre Nom</h4>
						<input class="type-in form-font-style" type="text" name="name" id="name">
						<label for="email"></label>
						<h4>Votre Adresse Email</h4>                              
						<input class="type-in form-font-style" type="text" name="email" id="email">
						<label for="message"></label>
						<h4>Votre Message</h4>                              
						<textarea class="form-font-style" name="message" id="message"></textarea>
						<label for="address"></label>
						<input style="display: none;" type="text" name="address" id="address">
						<p style="display: none;">Laissez cette case vide ou le message ne sera pas envoyé, Merci.</p>
						<input style="width: 150px;
						 margin-top: 20px; 
						 background: url("Pictures Folder/Contact Pictures/JKJ-Cachet.png") no-repeat center right; 
						 background-size: 50px 50px; 
						 text-align: left; 
						 color: #B32709; 
						 border: 2px solid #B32709;" class="submit green form-font-style" type="submit" value="Envoyer">
              		</form>
                </div>
               	<div class="social-network">
               		<div class="social-network-container">
                    	<a class="facebook" href="https://www.facebook.com/Jkleinjunge?ref=bookmarks"></a>
                    	<a class="twitter" href="https://twitter.com/JKleinJunge"></a>
                    	<a class="googleplus" href="https://plus.google.com/105023082921276418913/posts"></a>
                    	<a class="linkedin" href="https://www.linkedin.com/profile/view?id=378283404&trk=nav_responsive_tab_profile_pic"></a>                                                                        
                    </div>
               </div>
			</div>	
		</div>  	
	</body>			
</html>