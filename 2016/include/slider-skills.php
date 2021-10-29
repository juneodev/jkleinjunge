<div class="slider"><!--// Slider //-->
	<a href="#" class="arrow-prev"></a>
	<a href="#" class="arrow-next"></a>
	<div class="slide active-slide"><!--// Graphic Slide //-->
		<div class="slider-container">
			<div class="row">
				<div class="slide-text float-left">
					<h1 class="nh-m"><?= $slider_title[0] ;?></h1>
					<h4 class="nh-xt"><?= $slider_under_title[0] ;?></h4>
					<p class="nh-t"><?= $slider_text[0] ;?></p>
				</div>
				<div class="slide-img float-right">
					<img src="img/JKJ-Grph-prnt-dsgn.png">
				</div>
			</div>
		</div>      
	</div>
	<div class="slide"><!--// Webdesign Slide //-->
		<div class="slider-container">
			<div class="slide-img float-left">
				<img src="img/JKJ-ui-ux-webdsgn.png">
			</div>
			<div class="slide-text float-right">
				<h1 class="nh-m"><?= $slider_title[1] ;?></h1>
				<h4 class="nh-xt"><?= $slider_under_title[1] ;?></h4>
				<p class="nh-t"><?= $slider_text[1] ;?></p>
			</div>
		</div>    
	</div> 
	<div class="slide"><!--// Developement Slide //-->
		<div class="slider-container">
			<div class="row">
				<div class="slide-text float-left">
					<h1 class="nh-m"><?= $slider_title[2] ;?></h1>
					<h4 class="nh-xt"><?= $slider_under_title[2] ;?></h4>
					<p class="nh-t"><?= $slider_text[2] ;?></p>
				</div>
				<div class="slide-img float-right">
					<img src="img/JKJ-Dev-Prog.png">
				</div>
			</div>
		</div>      
	</div>
</div>
<section  id="skills" class="col-section"><!--// Collumn Section //-->
	<div class="slider-nav">
		<ul class="slider-dots">
			<li class="dot active-dot">&bull;</li>
			<li class="dot">&bull;</li>
			<li class="dot">&bull;</li>
		</ul>
		<div class="col-container">
			<div class="col">
				<img src="img/JKJ-Grph-prnt-dsgn.png" alt="">
				<h3 class='nh-t'>
					<?= $slider_title[0] ;?> <br> <span class="icon-down-open"></span>
				</h3>
				<ul class="skill-container">
					<li class="skill"><a class="modal" id="ps-icon" href="#">Photoshop<span></span></a></li>
					<li class="skill"><a class="modal" id="ai-icon" href="">Illustrator<span></span></a></li>
					<li class="skill"><a class="modal" id="ind-icon" href="">inDesign<span></span></a></li>
				</ul>
			</div>
			<div class="col">
				<img src="img/JKJ-ui-ux-webdsgn.png" alt="">
				<h3 class='nh-t'>
					<?= $slider_title[1] ;?> <br> <span class="icon-down-open"></span>
				</h3>
				<ul class="skill-container">
					<li class="skill"><a class="modal" id="html-icon" href="#">Html<span></span></a></li>
					<li class="skill"><a class="modal" id="css-icon" href="#">Css<span></span></a></li>
					<li class="skill"><a class="modal" id="bs-icon" href="#">Bootstrap<span></span></a></li>
					<li class="skill"><a class="modal" id="resp-icon" href="#">Responsive<span></span></a></li>
				</ul>
			</div>
			<div class="col">
				<img src="img/JKJ-dev-prog.png" alt="">
				<h3 class='nh-t'>
					<?= $slider_title[2] ;?> <br> <span class="icon-down-open"></span>
				</h3>
				<ul class="skill-container">
					<li class="skill"><a class="modal" id="php-icon" href="#">Php<span></span></a></li>
					<li class="skill"><a class="modal" id="jq-icon" href="#">jQuery<span></span></a></li>
					<li class="skill"><a class="modal" id="js-icon" href="#">Javascript<span></span></a></li>
					<li class="skill"><a class="modal" id="wp-icon" href="#">Wordpress<span></span></a></li>
				</ul>
			</div>
		</div>
	</div>	
</section>