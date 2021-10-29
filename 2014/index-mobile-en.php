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
 			<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1,0'/>
       		<link rel='shortcut icon' type='image/png' href='JKJ-favicon.png' />
			<meta charset='utf-8'>
			<title>I'm a Webdeveloper</title>
			<link href='reset.css' rel='stylesheet' type='text/css'>        
			<link href='Main-mobile.css' rel='stylesheet' type='text/css'>
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

  
  header("Location: index-mobile-en.php?status=thanks");
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
        <a href="index-mobile-en.php"><img src="JKJ-Facebook-profile-picture.png"></a>
        <p>Thank you for your message, I'll be in touch !</p>
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
						<p>HTML, standing for "HyperText Markup Language" 
			        	is the standard language used to create web pages.
						</p>
					</li>
					<li class="list-skills">
						<img src="Pictures Folder/My Skills Pictures/JKJ-Front-css-logo.png"/>
						<p>CSS or “Cascading Style Sheets" is the language
              			used with HTML for styling pages.
						</p>
					</li>
					<li class="list-skills">
						<img src="Pictures Folder/My Skills Pictures/JKJ-Front-javascript-logo.png"/>
						<p>JAVASCRIPT is a dynamic computer programming
              			language, object-oriented, and used with HTML for making interactive webpages.
						</p>
					</li>										
					<li class="list-skills">
<! Trop grand ->		<img style="height: 20px;" src="Pictures Folder/My Skills Pictures/JKJ-Front-jquery-logo.png"/>
						<p>jQuery is a JavaScript library designed to simplify 
              			the client-side scripting of HTML. jQuery is the most popular JavaScript library in use today.
						</p>
					</li>
					<li class="list-skills">
						<img src="Pictures Folder/My Skills Pictures/JKJ-Front-wordpress-logo.png"/>
						<p>WordPress is a free and open source blogging tool and a 
              			content management system (CMS) based on PHP and MySQL.
						</p>
					</li>
					<li style="padding-top: 15px;"class="list-skills">
<! Trop grand->		<img style="height: 25px;" src="Pictures Folder/My Skills Pictures/JKJ-Front-php-logo.png"/>
						<p>PHP is a server-side language designed for web development, 
              			the most used server-side language.
						</p>
					</li>
					<li class="list-skills">
						<img src="Pictures Folder/My Skills Pictures/JKJ-Front-bootstrap-logo.png"/>
						<p>Bootstrap is a collection of tools for 
              			creating websites and web applications using HTML and CSS
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
						<p>FENUA Creations is a 10 years old labels print
						Compagny based in Tahiti, French Polynesia. 
						Which prints and creates labels, stickers, 
						business cards and a lot more.
						</p>
					</li>
					<li class="site">
						<img style="width: 200px" src="JKJ-Tikaito-site-picture.png"/>
						<img src="JKJ-Tikaito-logo.png">
						<p>TIKAITO, is a project of a movie thought
						by LUCID DREAM PROD., a production compagny
						based in Tahiti, French Polynesia.
						Both the movie and the website are still projects
						and aren’t finished yet.
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
				<p>Hi my name is Jérémie Cunéo ! I'm a french front-end developer and freelancer
                   based in Marseille, France.</p>
			</div>
			<div class="contact-part green">
				<a name="contact"></a>
				<div class="contact-title">
					<h2>Contact :</h2>                             
                </div>
                <div class="contact-form">
                  	<form class="form-font-style" method="post" action="index-mobile-en.php">
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
						<input style="width: 140px;
						 margin-top: 20px; 
						 background: url("Pictures Folder/Contact Pictures/JKJ-Cachet.png") no-repeat center right; 
						 background-size: 50px 50px; 
						 text-align: left; 
						 color: #B32709; 
						 border: 2px solid #B32709;" class="submit green form-font-style" type="submit" value="Send">
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