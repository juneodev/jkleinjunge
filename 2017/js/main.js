$(document).ready(function(){
	/////////////////  Change la couleur du background du Jumbotron, Footer & h2 en fonction de la page
	$('.nav-link').click(function(e){
		e.preventDefault();
		var linkValue = $(this).attr('data-link-value');
		$('#jumbotron').removeClass();
		$('#jumbotron h2').hide();		
		$('#jumbotron').addClass(linkValue + '-jumb');
		$('#jumbotron .' + linkValue + '-title').fadeIn(150);
		$('.main-container').hide();
		//alert('.' + linkValue + '-content');
		$('#' + linkValue + '-content').show(150);
		// Footer Classes
		$('footer').attr('class', 'flex');;
		$('footer').addClass(linkValue + '-footer');
	});
	///
	$('.drop-down-button').click(function() {
		$(this).toggleClass('open');
		$('.mobile-nav').toggleClass('open');
	});
});