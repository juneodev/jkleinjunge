$(document).ready( function() {
	// Hand-made filter :

	$('.filter').click(function() {	

		var type = $(this).attr('data-type');
		if ( type !== ".all" ) {
			$('.all').hide(200);
		}			

		$('.filter').removeClass('activ');
		$(this).addClass('activ');
		$(type).show(200);	
		return false;
	});



	// Reusable Vertical Align Function (Hand Made) :

	function verticalAlign(toCenterElement, Container){

		var toCenterElementHeight = $(toCenterElement).height();
		var ContainerHeight = $(Container).height();
		var calculatedMargin = (( ContainerHeight - toCenterElementHeight ) / 2) + 'px';

		$(toCenterElement).css('margin-top', calculatedMargin);

	}


	// First Check

	if ($(window).width() >= 600) {  
		//verticalAlign( '.about-me-container img', '.about-me-container' );
		verticalAlign( '.about-me-container', '.about-me' );
	} else {
		$('.about-me-container img').css('margin', '20px 25%');
	}  

	// Resice check
	$(window).resize(function(){
		if ($(window).width() >= 600) {  

			verticalAlign( '.about-me-container img', '.about-me-container' );
			verticalAlign( '.about-me-container', '.about-me' );

			$(window).resize(function(){
				verticalAlign( '.about-me-container img', '.about-me-container' );
				verticalAlign( '.about-me-container', '.about-me' );
			});


		} else {
			$('.about-me-container img').css('margin-top', '20px');

			$(window).resize(function(){
				$('.about-me-container img').css('margin-top', '20px');
			});
		}   
	});

	if ($(window).width() >= 600) { 


		function modalResponsiveCalculation(modalShown){

			$(modalShown).css('height', "auto");
			var modalWindowHeight = $(modalShown).height();
			var overlayHeigth = $('.modal-overlay').height();
			var calculatedMargin = (overlayHeigth - modalWindowHeight +  + $('header').height()) / 2;

			if ( modalWindowHeight > overlayHeigth - $('header').height() ) {
				var calculatedHeight = overlayHeigth / 100 * 80;					
				$(modalShown).css('max-height', calculatedHeight);	
				var modalWindowHeight = $(modalShown).height();
				$(modalShown).children('div').children('img').height(modalWindowHeight);
				var calculatedMargin = (overlayHeigth - modalWindowHeight +  + $('header').height()) / 2;
				$(modalShown).css('margin-top', calculatedMargin);


			} else {
				$(modalShown).css('margin-top', calculatedMargin);
			}
		}


		var modalShown;

		$('.modal').click(function() {
			if ($(window).width() >= 1000) { 
				$(modalShown).hide();
				$('.skill-icon-container').hide();
				var modalId = $(this).attr('id');
				modalShown = '.modal-' + modalId;
				$(modalShown).show();
				$('.modal-overlay').show();
				modalResponsiveCalculation(modalShown);		
				if (modalId.indexOf("icon") >= 0) {
					$('.skill-icon-container').show();
					$('.close-modal-button').css('top', '20px').css('right', '20px');				
				} else {
					$('.close-modal-button').css('top', '100px').css('right', '200px');
				}
				return false;	
			}
		});

		$('.close-modal-button').click(function() {
			$('.modal-overlay').hide(100);
			$(modalShown).hide();
			$(modalShown).css("max-height", "auto");
			return false;	
		});

	}
	var decalage = $('nav').height(); // Hauteur du menu fixé
	$(window).on('scroll load resize', function () {
		var decalage = $('nav').height(); // Hauteur du menu fixé
		var windscroll = $(window).scrollTop(); //Position du scroll 
		if ( windscroll == 0) { // Quand on arrive en haut du document : activer le premier lien
			$('a.active').removeClass('active'); // Supprimer la classe active sur tous les liens
			$('header li:first-child a:not(".active")').addClass('active').focus();
			$('header').addClass('debut');
		} else {
			$('header').removeClass('debut');
			$('section').each( function () {	// Pour chaque section	
				// Si la position est supérieure au haut de la section
				if( windscroll >= $(this).offset().top - decalage) { 
					var id = $(this).attr('id'); // On récupère l'id de la section
					var lien = $('a[href="#'+id+'"]'); // Pour trouver le lien correspondant
					$('a.active').removeClass('active'); // Supprimer la classe active sur tous les liens
					$(lien).addClass('active'); // Ajouter la classe active sur le lien correspondant à la section
				}
			});	
		}
	});

	$('.low-anchor').click(function () {
		var cible = $(this).attr('href');
		ancreDouce( cible );
	});


	function ancreDouce( cible ) {
		var initPos = $(window).scrollTop();

		window.location.hash = cible;
		$(window).scrollTop(initPos);
		$('html,body').animate(
			{scrollTop : $(cible).offset().top - decalage + 1},
			'slow',
			function () {
				tab_n_focus( cible );
			}
		);
		return false;
	}

	/*	Accessibilité au clavier : donner le focus a un élément
		Le focus ne peut être attribué qu'aux liens, champs de formulaire ou élément avec un attribut tabindex (attribut permettant de modifier l'ordre de tabulation naturel)
		On utilise l'attribut tabindex pour pouvoir donner le focus
	*/
	function tab_n_focus( element ) {
		$(element).attr('tabindex','0').focus().removeAttr('tabindex');
	}


	function sliderResponsiveCalculation(){

		var slideTextHeigth = $('.active-slide .slide-text').height();
		var sliderHeigth = $('.slide').height();
		var calculatedMargin = ( sliderHeigth - slideTextHeigth ) / 2;
		var ImageHeigth = sliderHeigth * 0.75;


		$('.active-slide .slide-text').css('margin-top', calculatedMargin);
		$('.active-slide .slide-img img').height(ImageHeigth).css('margin-top', (sliderHeigth - ImageHeigth)/2);

	}



	$(".nav-button").click(function () {
		$(".nav-button,.primary-nav").toggleClass("open");
	});    




	var Interval = setInterval(nextFade, 3000);


	$('.slider').hover(function(){
		clearInterval(Interval);
	});

	$('.slider').mouseleave(function(){
		Interval = setInterval(nextFade, 22200);
	});

	function nextFade() {// Fonction de passage au prochain slide de manière fondu
		var currentSlide = $('.active-slide');
		var nextSlide = currentSlide.next();

		var currentDot = $('.active-dot');
		var nextDot = currentDot.next();

		if(nextSlide.length === 0) {
			nextSlide = $('.slide').first();
			nextDot = $('.dot').first();
		}

		currentSlide.fadeOut(600).removeClass('active-slide');
		nextSlide.fadeIn(600).addClass('active-slide');

		currentDot.removeClass('active-dot');
		nextDot.addClass('active-dot');
		sliderResponsiveCalculation();
	};// fin de fonction

	function prevFade(){// Fonction de passage au précédent slide de manière fondu
		var currentSlide = $('.active-slide');
		var prevSlide = currentSlide.prev('.slide');

		var currentDot = $('.active-dot');
		var prevDot = currentDot.prev();

		if(prevSlide.length === 0) {
			prevSlide = $('.slide').last();
			prevDot = $('.dot').last();
		}

		currentSlide.fadeOut(600).removeClass('active-slide');
		prevSlide.fadeIn(600).addClass('active-slide');

		currentDot.removeClass('active-dot');
		prevDot.addClass('active-dot');
	};


	$('.dropdown-toggle').click(function() {
		$('.dropdown-menu').toggle();
	});


	$('.arrow-next').click(function() {
		nextFade();  
	});


	$('.arrow-prev').click(function() {
		prevFade();
	});

	$(document).keyup(function(e){
		if (e.keyCode == 37) { 
			prevFade();
			return false;
		}
	});

	$(document).keyup(function(e){
		if (e.keyCode == 39) { 
			nextFade();
			return false;
		}
	});

	sliderResponsiveCalculation();

	$(window).resize(function(){
		sliderResponsiveCalculation();
	});
});