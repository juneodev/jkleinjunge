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
        	<p>Are you sure your Name, Email Address and Message are filled ?</p>
     	 	</div>
			";
	  exit;
	  }
	  
  foreach( $_POST as $value ){
	  if( stripos($value, 'Content-Type:') !== FALSE ){
	  echo "<div class='thank-you'>
        	<a href='index.php'><img src='JKJ-Facebook-profile-picture.png'></a>
        	<p>There was a probleme sending the message !</p>
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
        	<p>There was a probleme sending the message !</p>
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


if (!$mail->send()) {
	  echo "<head>
	  		<meta name='robots' content='noindex, nofollow' />
        	<link rel='shortcut icon' type='image/png' href='JKJ-favicon.png' />
			<meta charset='utf-8'>
			<title>I'm a Webdeveloper</title>
			<link href='reset.css' rel='stylesheet' type='text/css'>        
			<link href='Main.css' rel='stylesheet' type='text/css'>
	  		</head><div class='thank-you'>
        	<a href='index.php'><img src='JKJ-Facebook-profile-picture.png'></a>
        	<p>Thank you for your message, I'll be in touch !</p>
     	 	</div>
			";
} else {
	  echo "<head>
	  		<meta name='robots' content='noindex, nofollow' />
        	<link rel='shortcut icon' type='image/png' href='JKJ-favicon.png' />
			<meta charset='utf-8'>
			<title>I'm a Webdeveloper</title>
			<link href='reset.css' rel='stylesheet' type='text/css'>        
			<link href='Main.css' rel='stylesheet' type='text/css'>
	  		</head><div class='thank-you'>
        	<a href='index.php'><img src='JKJ-Facebook-profile-picture.png'></a>
        	<p>Thank you for your message, I'll be in touch !</p>
     	 	</div>
			";
}
  
  header("Location: index-en.php?status=thanks");
  exit;
  
}
?>
<!doctype html>
<html>
	<head>
        <link rel="shortcut icon" type="image/png" href="JKJ-favicon.png" />
		<meta charset="utf-8">
		<title>I'm a Webdeveloper</title>
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
        <p>Thank you for your message, I'll be in touch !</p>
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
              <div class="list-logo-paragraphe"><p>HTML, standing for "HyperText Markup Language" 
			        is the standard language used to create web pages.</p></div>
            </div>
            <div class="list-logo">
              <div class="list-logo-paragraphe"><p>CSS or “Cascading Style Sheets" is the language
              used with HTML for styling pages.</p></div>
              <div class="list-logo-image droite"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-css-logo.png"></div>
            </div>  
            <div class="list-logo">
              <div class="list-logo-image gauche"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-javascript-logo.png"></div>
              <div class="list-logo-paragraphe"><p>JAVASCRIPT is a dynamic computer programming
              language, object-oriented, and used with HTML for making interactive webpages.</p></div>
            </div>
            <div class="list-logo">
              <div class="list-logo-paragraphe"><p>jQuery is a JavaScript library designed to simplify 
              the client-side scripting of HTML. jQuery is the most popular JavaScript library in use today.</p></div>
              <div class="list-logo-image droite"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-jquery-logo.png"></div>            
            </div>
            <div class="list-logo">
			  <div class="list-logo-image gauche"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-wordpress-logo.png"></div>
              <div class="list-logo-paragraphe"><p>WordPress is a free and open source blogging tool and a 
              content management system (CMS) based on PHP and MySQL.</p>
            </div>
            <div class="list-logo">
              <div class="list-logo-paragraphe"><p>PHP is a server-side language designed for web development, 
              the most used server-side language.</p></div>
              <div class="list-logo-image droite"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-php-logo.png"></div>
            </div>
            <div class="list-logo droite">            
			  <div class="list-logo-image gauche"><img src="Pictures Folder/My Skills Pictures/JKJ-Front-bootstrap-logo.png"></div>
              <div class="list-logo-paragraphe"><p>Bootstrap is a collection of tools for 
              creating websites and web applications using HTML and CSS</p>           
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
                        <p>FENUA Creations is a 10 years old labels print
Compagny based in Tahiti, French Polynesia. 
Which prints and creates labels, stickers, 
business cards and a lot more. 
</p>
                    </div>
                    <div class="right-site">
                    	<img src="JKJ-Tikaito-site-picture.png">
                        <img src="JKJ-Tikaito-logo.png">
                        <p>TIKAITO, is a project of a movie thought
by LUCID DREAM PROD., a production compagny
based in Tahiti, French Polynesia.
Both the movie and the website are still projects
and aren’t finished yet.
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
                <p>Hi my name is Jérémie Cunéo ! I'm a french<br>front-end developer and freelancer
                   based in Marseille, France. 
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
                  <h3>Contact me!</h3>
                  <form class="form-font-style" method="post" action="index-en.php">
                  	<div class="center-form">
                                  <label for="name"></label>
                              	  <h4>Your Name</h4>
                                  <input class="type-in form-font-style" type="text" name="name" id="name">
                                  <label for="email"></label>
                              	  <h4>Your Email Address</h4>                              
                                  <input class="type-in form-font-style" type="text" name="email" id="email">
                                  <label for="message"></label>
                              	  <h4>Your Message</h4>                              
                                  <textarea class="form-font-style" name="message" id="message"></textarea>
                                  <label for="address"></label>
                                  <input style="display: none;" type="text" name="address" id="address">
                                  <p style="display: none;">Humans leave this field blank or the message won't be sent, Thank's.</p>
                      			  <input class="submit green form-font-style" type="submit" value="Send">
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
  

      

