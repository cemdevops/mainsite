(function(window, document, $) {
    'use strict';
    if ($('.home-slider').length) {
        $('.home-slider .wrapper>.view>div').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: false
        });
    }
})(window, document, jQuery);