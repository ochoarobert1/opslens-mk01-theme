document.addEventListener("touchstart", function () {}, true);

function ticker() {
<<<<<<< HEAD
    jQuery('#ticker div.vertical-media-item:first-child').slideUp(function () {
        jQuery(this).appendTo(jQuery('#ticker')).fadeIn();
    });

    jQuery('#ticker2 div.vertical-video-item:first-child').slideUp(function () {
=======
    jQuery('#ticker div.vertical-media-item:first-child').slideUp(function() {
        jQuery(this).appendTo(jQuery('#ticker')).fadeIn();
    });

    jQuery('#ticker2 div.vertical-video-item:first-child').slideUp(function() {
>>>>>>> c4471abc9d8b0cdea3d50798686240f132f1ed94
        jQuery(this).appendTo(jQuery('#ticker2')).fadeIn();
    });
}

var timer = setInterval(ticker, 3000);

jQuery(document).ready(function ($) {
    "use strict";

    jQuery('.menu-bars').on('click', function (e) {
        jQuery('.navbar-mobile').toggleClass('navbar-mobile-hidden');
    });

    jQuery('.close-button').on('click', function (e) {
        jQuery('.navbar-mobile').toggleClass('navbar-mobile-hidden');
    });

    var heightImg = jQuery('.main-featured-left').height();
    if (heightImg != 0) {
        jQuery('.main-featured-center img').height(heightImg);
    } else {
        jQuery('.main-featured-center img').height('auto');
    }

    jQuery(window).resize(function () {
        var heightImg = jQuery('.main-featured-left').height();
        if (heightImg != 0) {
            jQuery('.main-featured-center img').height(heightImg);
        } else {
            jQuery('.main-featured-center img').height('auto');
        }
    });


    jQuery('.custom-slider-bar-owlcarousel').owlCarousel({
        items: 4,
        margin: 10,
        loop: true,
        nav: true,
        dots: false
    });

    jQuery('.main-bar-slider-carousel').owlCarousel({
        items: 4,
        margin: 20,
<<<<<<< HEAD
        loop: true,
        nav: true,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 2
            },
            1024: {
                items: 4
            }
        }
=======
        nav: false,
        dots: false
>>>>>>> c4471abc9d8b0cdea3d50798686240f132f1ed94
    });

    jQuery('#ticker').on({
        mouseenter: function () {
            clearInterval(timer);
        },
        mouseleave: function () {
            timer = setInterval(ticker, 3000);
        }
    });

    jQuery('#ticker2').on({
<<<<<<< HEAD
        mouseenter: function () {
            clearInterval(timer);
        },
        mouseleave: function () {
            timer = setInterval(ticker, 3000);
        }
    });
=======
        mouseenter: function(){
            clearInterval(timer);
        },
        mouseleave: function(){
            timer = setInterval(ticker, 3000);
        }
    });

>>>>>>> c4471abc9d8b0cdea3d50798686240f132f1ed94

});
