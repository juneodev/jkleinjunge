<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
header('Location: index-mobile.php');
?>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);
  
  if ($name == "" OR $email == "" OR $message == "") {
	  echo "<head>
	  		<meta name='robots' content='noindex, nofollow' />
        	<link rel='shortcut icon' type='image/png' href='JKJ-favicon.png' />
			<meta charset='utf-8'>
			<title>I'm a Webdeveloper</title>
			<link href='reset.css' rel='stylesheet' type='text/css'>        
			<link href='Main.css' rel='stylesheet' type='text/css'>
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
        	<link rel='shortcut icon' type='image/png' href='JKJ-favicon.png' />
			<meta charset='utf-8'>
			<title>I'm a Webdeveloper</title>
			<link href='reset.css' rel='stylesheet' type='text/css'>        
			<link href='Main.css' rel='stylesheet' type='text/css'>
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


  
  header("Location: index.php?status=thanks");
  exit;
  
}
?>
<!DOCTYPE>
<html>
	<head>
        <link rel="shortcut icon" type="image/png" href="JKJ-favicon.png" />
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
		<title>Je suis Développeur Web</title>
		<link href="reset.css" rel="stylesheet" type="text/css">        
		<link href="Main.css" rel="stylesheet" type="text/css">
        
	</head>
	<body>
      <a name="top"></a>
      <div class="navbar">
          <div class="blue-bande-logo hover">
            	<div class="moz-ie-clearfix-positionning">
          	 		<img style="position: absolute; left:-11px; width: 145px;" src="JKJ-left-bande.png" class="red-bande">
            		<a class="main-button" href="#top"></a>
                    <a class="french-version" href="index.php"></a>
                    <a class="english-version" href="index-en.php"></a>
                </div>    
          </div>
          <img class="background" src="JKJ-Front.png" alt="image de fond d'écran illustrant un paysage">
      </div>
      
      <div class="container-button-bar">
        <ul class="buttons-bar">
          <div class="button-center">
            <a href="#skill">
              <div class="button green-blue hover hover-button">
               <div class="button-name">
                  <img style="width: 55px; margin-top: 43px; margin-left: 8px;" src="JKJ-icon-skills.png">
                  <p>My Skills</p>
               </div>   
              </div>
            </a>
            <a href="#work">
              <div class="button blue hover hover-button">
                <div class="button-name">
                  <img style="width: 45px; margin-top: 35px; margin-left: 8px" src="JKJ-icon-work.png">
                  <p>My Works</p>
               </div>
              </div>  
            </a>
            <a href="#aboutme">
              <div class="button red hover hover-button">
               <div class="button-name">
                  <img style="width: 37px; margin-top: 36px; margin-left: 8px;" src="JKJ-icon-about_me.png">
                  <p>About Me</p>
               </div>   
              </div>
            </a>
            <a href="#contact">
              <div class="button green hover hover-button">
               <div class="button-name">
                  <img style="width: 43px; margin-top: 39px; margin-left: 8px;" src="JKJ-icon-contact.png">
                  <p>Contact </p>
               </div>   
              </div>
            </a>
          </div>
        </ul>
      </div>
      <div class="line-before-buttons">
      </div>
      
   	<?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
      <div class="thank-you">
        <a href="index.php"><img src="JKJ-Facebook-profile-picture.png"></a>
        <p>Merci pour votre message, Je repondrai au plus vite !</p>
      </div>
     </body>
    </html>  
	<?php } ?>
   

		<a name="skill"/>  
	   <div class="main-container">
        <div class="skill-part">
          <div class="title-skill-part">
          	<img src="Pictures Folder/My Skills Pictures/JKJ-Front-hat-icon.png">
          	<h1>My Skills :</h1>
          </div>
          <div class="skill-part-container">
            <div class="list-logo">
              <div class="list-logo-image gauche"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-html-logo.png"></div>
              <div class="list-logo-paragraphe"><p>HTML, pour "HyperText Markup Language" 
			  est le language standard utilisé pour créer des pages web.</p></div>
            </div>
            <div class="list-logo">
              <div class="list-logo-paragraphe"><p>CSS ou “Cascading Style Sheets" est le language utilisé avec HTML pour styliser les
              pages web.
           	</p></div>
              <div class="list-logo-image droite"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-css-logo.png"></div>
            </div>  
            <div class="list-logo">
              <div class="list-logo-image gauche"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-javascript-logo.png"></div>
              <div class="list-logo-paragraphe"><p>JAVASCRIPT est un language de programmation 
              orienté-objet, et utilisé avec HTML pour rendre les pages web interatives.</p></div>
            </div>
            <div class="list-logo">
              <div class="list-logo-paragraphe"><p>jQuery est une bibliothèque JavaScript créée pour faciliter l'écriture de scripts 
              côté-client dans le code HTML des pages web. jQuery est la bibliothèque JavaScript la plus utilisée aujourd'hui.</p></div>
              <div class="list-logo-image droite"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-jquery-logo.png"></div>            
            </div>
            <div class="list-logo">
			  <div class="list-logo-image gauche"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-wordpress-logo.png"></div>
              <div class="list-logo-paragraphe"><p>WordPress est un moteur de blog avec système de gestion de contenu ou CMS (Content management system).
              Libre et écrit en PHP, reposant sur une base de données MySQL.</p>
            </div>
            <div class="list-logo">
              <div class="list-logo-paragraphe"><p>PHP est le language de programmation fonctionnant coté-serveur crée pour le développement web, 
              le language coté-serveur le plus utilisé sur le web actuellement.</p></div>
              <div class="list-logo-image droite"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-php-logo.png"></div>
            </div>
            <div class="list-logo droite">            
			  <div class="list-logo-image gauche"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-bootstrap-logo.png"></div>
              <div class="list-logo-paragraphe"><p>Twitter Bootstrap est une collection d'outils utile à la création de sites web et applications 
              web qui contient un ensemble de codes HTML et CSS préfaits.</p>           
            </div>
		  </div>
          </div>
          </div>
          </div>
          
          <a name="work"></a>
          <div class="work-part">
      		<div class="title-work-part">
     			<img src="Pictures Folder/My Works Pictures/JKJ-Front-work-icon.png">
     			<h1>My Works :</h1>                               
      		</div>
      		<div class="work-part-container">
      			<div class="site-container">
                	<div class="left-site">
                    	<img style="margin-left: -97px;" src="JKJ-Fenua-Creations-site-picture.png">
                        <img src="JKJ-Fenua-creations-logo.png">
                        <p>FENUA Creations est une société d'impression d'étiquettes basée sur Tahiti, Polynésie Française. 
 						Où l'on crée et imprime étiquettes, stikers, cartes de visite et beaucoup plus.  
						</p>
                    </div>
                    <div class="right-site">
                    	<img src="JKJ-Tikaito-site-picture.png">
                        <img src="JKJ-Tikaito-logo.png">
                        <p>TIKAITO, un projet de film pensé
						par LUCID DREAM PROD., une boîte de production sur
						Tahiti, Polynésie Française.
						Ni le film ni  le site internet n'ont été terminé pour l'instant.
                        
</p>                    
                    </div>
            	</div>
                              

      		</div>
    	  </div>
          <a name="aboutme"></a>
		  <div class="about-me-part">
          	                
              <div class="title-about-me-part">
              <img style="width: 80px;"src="Pictures Folder/About me Pictures/JKJ-Front-about-me-icon.png">
              <h1>About Me :</h1>
                             
              </div>
  
          	  <div class="about-me-container">
          	    <img src="JKJ-Face-Picture.png">
                <p>Bonjour je m'appelle Jérémie Cunéo! Je suis Développeur Web<br>en Freelance
                   basé sur Marseille, France. 
                </p>
          	  </div>
          </div>
          <div class="contact-part">
          	<div class="contact-container">
            	<div class="title-contact-part">
                  <img style="width: 80px;"src="Pictures Folder/Contact Pictures/JKJ-Front-contact-icon.png">
                  <h1>Contact :</h1>                             
                </div>
                <a name="contact"></a>
                <img src="Pictures Folder/Contact Pictures/JKJ-Cachet.png">
                <div class="contact-form">
                  <h3>Contactez-moi !</h3>
                  <form class="form-font-style" method="post" action="index.php">
                  	<div class="center-form">
                                  <label for="name"></label>
                              	  <h4>Votre Nom</h4>
                                  <input class="type-in form-font-style" type="text" name="name" id="name">
                                  <label for="email"></label>
                              	  <h4>Votre Email</h4>                              
                                  <input class="type-in form-font-style" type="text" name="email" id="email">
                                  <label for="message"></label>
                              	  <h4>Votre Message</h4>                              
                                  <textarea class="form-font-style" name="message" id="message"></textarea>
                                  <label for="address"></label>
                                  <input style="display: none;" type="text" name="address" id="address">
                                  <p style="display: none;">Humains, laissez ce champ de texte blanc ou le message de sera pas envoyé, Merci! </p>
                      			  <input class="submit green form-font-style" type="submit" value="Envoyer">
                  	</div>
                  </form>
               </div>
               <div class="social-network">
               		<div class="social-network-container">
                    	<a href="https://www.facebook.com/Jkleinjunge?ref=bookmarks"><img class="facebook" src="Pictures Folder/Contact Pictures/JKJ-Facebook-logo.png"></a>
                    	<a href="https://twitter.com/JKleinJunge"><img class="twitter"src="Pictures Folder/Contact Pictures/JKJ-Twitter-logo.png"></a>
                    	<a href="https://plus.google.com/105023082921276418913/posts"><img class="googleplus"src="Pictures Folder/Contact Pictures/JKJ-Googleplus-logo.png"></a>
                    	<a href="https://www.linkedin.com/profile/view?id=378283404&trk=nav_responsive_tab_profile_pic"><img class="linkedin"src="Pictures Folder/Contact Pictures/JKJ-Linkedin-logo.png"></a>                                                                        
                    </div>
               </div>
          	</div>
          </div>
          </div>  
        </div>
      </div>
    </div>
    </div>
  
  </body>
</html>
  