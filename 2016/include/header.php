<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="fr"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="fr"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Je suis développeur Web</title>
	<meta name="description" content="Develloper web designer graphic programming website">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/mobilemenu.css"/>
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Play:700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen:700,400,300' rel='stylesheet' type='text/css'>	<!--[if lt IE 9]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
<![endif]-->
</head>
<body id="top"><!--// Body //-->
	<header><!--// Responsive Navigation //-->
		<button class="nav-button">Toggle Navigation</button>
		<nav class="primary-nav">
			<li><a class="low-anchor" href="#top">top</a></li>
			<li><a class="low-anchor" href="#skills"><?= $skills ; ?></a></li>
			<li><a class="low-anchor" href="#work"><?= $work ; ?></a></li>
			<li><a class="low-anchor" href="#about-me"><?= $about_me ; ?></a></li>
			<li><a class="low-anchor" href="#contact"><?= $contact ; ?></a></li>
			<li class="language-chooser-mobile">
					<span style="background-image: url(img/<?php echo $language;?>-flag-icon.png)"></span>
					<ul>
						<a style="background-image: url(img/french-flag-icon.png);" href="<?php echo $_SERVER["REQUEST_URI"] . "?language=french"; ?>"</a>
						<a style="background-image: url(img/english-flag-icon.png);" href="<?php echo $_SERVER["REQUEST_URI"] . "?language=english"; ?>"></a>						
					</ul>
				</li>
		</nav>		
		<nav><!--// Main Nav //-->
			<a class="low-anchor" href="#top"></a>
			<ul>
				<li><a class="low-anchor" href="#skills"><?= $skills ; ?></a></li>
				<li><a class="low-anchor" href="#work"><?= $work ; ?></a></li>
				<li><a class="low-anchor" href="#about-me"><?= $about_me ; ?></a></li>
				<li><a class="low-anchor" href="#contact"><?= $contact ; ?></a></li>
				<li class="language-chooser">
					<span style="background-image: url(img/<?php echo $language;?>-flag-icon.png)"></span>
					<ul>
						<a style="background-image: url(img/french-flag-icon.png);" href="<?php echo $_SERVER["REQUEST_URI"] . "?language=french"; ?>"</a>
						<a style="background-image: url(img/english-flag-icon.png);" href="<?php echo $_SERVER["REQUEST_URI"] . "?language=english"; ?>"></a>						
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	<main id="top"><!--// Main //-->