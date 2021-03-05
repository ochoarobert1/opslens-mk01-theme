document.addEventListener("touchstart", function() {}, true);

function ticker() {
    jQuery('#ticker div.vertical-media-item:first-child').slideUp(function() {
        jQuery(this).appendTo(jQuery('#ticker')).fadeIn();
    });

    jQuery('#ticker2 div.vertical-video-item:first-child').slideUp(function() {
        jQuery(this).appendTo(jQuery('#ticker2')).fadeIn();
    });
}

var timer = setInterval(ticker, 3000);

jQuery(document).ready(function($) {
    "use strict";

    jQuery('.menu-bars').on('click', function(e) {
        jQuery('.navbar-mobile').toggleClass('navbar-mobile-hidden');
    });

    jQuery('.close-button').on('click', function(e) {
        jQuery('.navbar-mobile').toggleClass('navbar-mobile-hidden');
    });

    var heightImg = jQuery('.main-featured-left').height();
    if (heightImg != 0) {
        jQuery('.main-featured-center img').height(heightImg);
    } else {
        jQuery('.main-featured-center img').height('auto');
    }

    jQuery(window).resize(function() {
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
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            991: {
                items: 3
            },
            1170: {
                items: 3
            },
            1171: {
                items: 4
            }
        }
    });

    jQuery('.main-shows-slider-carousel').owlCarousel({
        items: 5,
        margin: 15,
        nav: false,
        dots: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            991: {
                items: 3
            },
            1170: {
                items: 3
            },
            1171: {
                items: 5
            }
        }
    });


    jQuery('#ticker').on({
        mouseenter: function() {
            clearInterval(timer);
        },
        mouseleave: function() {
            timer = setInterval(ticker, 3000);
        }
    });

    jQuery('#ticker2').on({
        mouseenter: function() {
            clearInterval(timer);
        },
        mouseleave: function() {
            timer = setInterval(ticker, 3000);
        }
    });


});