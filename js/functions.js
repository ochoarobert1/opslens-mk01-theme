document.addEventListener("touchstart", function () {}, true);

function ticker() {
    jQuery('#ticker div.vertical-media-item:first-child').slideUp(function() {
        jQuery(this).appendTo(jQuery('#ticker')).fadeIn();
    });

    jQuery('#ticker2 div.vertical-video-item:first-child').slideUp(function() {
        jQuery(this).appendTo(jQuery('#ticker2')).fadeIn();
    });
}

var timer = setInterval(ticker, 3000);



jQuery(document).ready(function ($) {
    "use strict";
    jQuery('.custom-slider-bar-owlcarousel').owlCarousel({
        items: 4,
        margin: 10,
        nav: false,
        dots: false
    });

    jQuery('.main-bar-slider-carousel').owlCarousel({
        items: 4,
        margin: 20,
        nav: false,
        dots: false
    });

    jQuery('#ticker').on({
        mouseenter: function(){
            clearInterval(timer);
        },
        mouseleave: function(){
            timer = setInterval(ticker, 3000);
        }
    });

    jQuery('#ticker2').on({
        mouseenter: function(){
            clearInterval(timer);
        },
        mouseleave: function(){
            timer = setInterval(ticker, 3000);
        }
    });


}); /* end of as page load scripts */
