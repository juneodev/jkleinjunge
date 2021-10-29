/**
 * Created by ggdu1 on 25/12/2017.
 */


import '../css/main.scss'


$(document).ready(function () {


    startConceptionPhasesSliderTimeOut();


    showNextConceptionPhaseSlide();


    $('#header__drop-down').click(function () {
        toggleMobileNavState();
    });


    $('.nav-anchor, .footer_nav-anchor').on('click', function () { // Au clic sur un élément

        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)

        $('html, body').animate(
            {
                scrollTop: $(page).offset().top - 100
            }, speed); // Go

        return false;
    });

    $('.nav-anchor').click(function () {

        hideMobileNav();

    });


    $(window).on("scroll", function () {

        var fromTop = $(document).scrollTop();

        $('#top-anchor').toggleClass("available", (fromTop > 400));
        $('header').toggleClass("fixed", (fromTop > 400));

    });


    $('#top-anchor').click(function () {
        $(this).addClass('launching');
        var self = $(this);


        $('html, body').animate(
            {
                scrollTop: 0
            },
            500); // Go

        setTimeout(function () {
            self.removeClass('launching');
            self.addClass('taking-off');
        }, 500);


        setTimeout(function () {
            self.removeClass('taking-off');
        }, 1000);


    });

});


// --------------------------- Conception phases


function startConceptionPhasesSliderTimeOut() {

    setInterval(function () {

        showNextConceptionPhaseSlide()

    }, 11000);


}

function showNextConceptionPhaseSlide() {


    var slider = $('#slider');


    var currentSlideId = slider.attr('data-current-slide-id');

    if (currentSlideId === undefined) {
        var currentSlideId = 0;
    }

    var newSlideId = parseInt(currentSlideId) + 1;

    if (newSlideId > 4) {
        newSlideId = 1;
    }

    slider.attr('data-current-slide-id', newSlideId);

    slider.attr('class', 'slide-' + newSlideId);

}


function toggleMobileNavState() {
    $('header').toggleClass('open');
}

function hideMobileNav() {
    $('header').removeClass('open');
}


// -------------------------------- Client's Feedback

$(".feedbacks > .feedback:gt(0)").hide();

setInterval(function () {

    $('.feedbacks > .feedback:first')
        .fadeOut(200)
        .next()
        .fadeIn(200)
        .end()
        .appendTo('.feedbacks');
}, 10000);