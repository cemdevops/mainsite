(function(window, document, $) {
    'use strict';
    if ($('.resolution-slider').length) {
        $('.resolution-slider div.views-element-container>div').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false
        });
    }
})(window, document, jQuery);