
<?php include("ressources.php")?>

<div class="modal-overlay">
	<div class="modal-ld-project modal-window">
		<div class="main-title">
			<h2 class="oswald">
				Lucid Dream Prod
			</h2>
		</div>
		<div class="main-jumbotron">
			<div class="jumbotron-text">
				<div class="jumbotron-text-center">
					<h3 class="oswald">FULL PROJECT</h3>
					<p class="oswald">Lucid Dream Prod est un collectif audio-visuel à Tahiti, Polynésie française.
						Ils aiment la vidéo, sont créatifs et ont déjà gagner deux concours vidéos en 
						réalisant des petits courts metrages avec un Iphone.
						Des clips musicaux, vidéos publicitaires et tournages de toute sorte,
						ils prennent en notoriété sur la capitale,
						mais leur vrai plaisir, c’est la créa pure !
					</p>
				</div>
			</div>
		</div>
		<div class="column-container">
			<div class="column ld-print">
				<p class="oswald">Aide a la création graphique et impression sur differents supports.</p>
			</div>
			<div class="column ld-web">
				<p class="oswald">Créations d’un site web avec page administrateur.</p>
			</div>
			<div class="column ld-video">
				<p class="oswald">Aide à la création d’une vidéo de promotion, motion design.</p>
			</div>
		</div>
	</div>




	<div class="modal-bp-project modal-window">
		<div class="main-title">
			<h2 class="oswald">
				Belle Provence minibus Deluxe
			</h2>
		</div>
		<div class="main-jumbotron">
			<div class="jumbotron-text">
				<div class="jumbotron-text-center">
					<h3 class="oswald">WEB PROJECT</h3>
					<p class="oswald">Belle Provence minibus Deluxe est une entreprise de transport privé,
						spécialisée dans les transferts individuels ou de mini-groupes avec chauffeur ainsi que 
						dans les excursions et circuits en véhicules privatisés, 
						en Provence et au delà.
					</p>
				</div>
			</div>
		</div>
		<div class="column-container">
			<div class="column bp-web">
				<p class="oswald">Création d'un application web, refonte du site et du design existant. </p>
			</div>
		</div>
	</div>


	<div class="skill-icon-container">
		<?php  for ( $i = 1; $i <= 14 ; $i++ ) { ?>
		<div class="<?php echo $icon['nom' . $i]  ?>">
			<div class="left-side"><span></span></div>
			<div class="right-side">
				<h1 class="oswald"><?php echo $icon['titre'  . $i]  ?></h1>
				<p class="oswald"> 
					<?php echo $icon['text' . $i]  ?> <br>
					<a class="wiki-link" href="http://www.wikipedia.org">wikipedia.org</a>
				</p>
			</div>
		</div>
		<?php  } ?>	
	</div>



	<div class="modal-print-mrs modal-print">
		<div>
			<img src="img/JKJ-Mrs-Graph-Image.jpg" alt="">
		</div>
	</div>

	<div class="modal-print-color-run modal-print">
		<div>
			<img src="img/JKJ-Color-Run-Graph.jpg" alt="">
		</div>
	</div>

	<div class="modal-print-nendaz modal-print">
		<div>
			<img src="img/JKJ-Nendaz-Graph.jpg" alt="">
		</div>
	</div>

	<div class="modal-print-kenzo modal-print">
		<div>
			<img src="img/JKJ-kenzo-graph.jpg" alt="">
		</div>
	</div>
	
	<div class="modal-bv-logo modal-print">
		<div>
			<img src="img/Logo-bv-image.png" alt="">
		</div>
	</div>
	
	<div class="modal-ma-logo modal-print">
		<div>
			<img src="img/mazargues-affair-logo.png" alt="">
		</div>
	</div>
	
	






	<div class="modal-website-fc">
		<div class="center-container">
			<a class="left-side" href="http://www.fenuacreations.pf">
			</a>
			<div class="right-side">
				<h1 class="oswald">Fenua Creation</h1>
				<p class="oswald">
					FENUA Creations is a 10 years old labels print 
					Compagny based in Tahiti, French Polynesia. 
					Which prints and creates labels, stickers,
					business cards and a lot more.				
				</p>			
			</div>
		</div>
	</div>
	
	<div class="modal-website-jkj-2014">
		<div class="center-container">
			<a class="left-side" href="http://www.jkleinjunge.com/2014">
			</a>
			<div class="right-side">
				<h1 class="oswald">JKJ 2014</h1>
				<p class="oswald">
					This is the old version of my portfolio.				
				</p>			
			</div>
		</div>
	</div>
</div>