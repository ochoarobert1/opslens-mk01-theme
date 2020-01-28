document.addEventListener("touchstart", function () {}, true);

function ticker() {
    jQuery('#ticker div.custom-slider-vertical-item:first-child').slideUp(function() {
        jQuery(this).appendTo(jQuery('#ticker')).fadeIn();
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

    jQuery('#ticker').on({
        mouseenter: function(){
            clearInterval(timer);
        },
        mouseleave: function(){
            timer = setInterval(ticker, 3000);
        }
    });


}); /* end of as page load scripts */
