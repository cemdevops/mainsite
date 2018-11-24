(function(window, document, $) {
    'use strict';
    if ($('.evento-fotos-slider-item').length) {
        //$('.home-publications div.home-publications-box>div.inner').slick({
        // $('.home-pesquisadores div.home-pesquisadores-box>div.row').slick({
        $('.evento-slider-foto-container div.evento-fotos-slider-box>div.row>div.views-element-container>div').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 5,
            arrows: false
        });
    }
})(window, document, jQuery);