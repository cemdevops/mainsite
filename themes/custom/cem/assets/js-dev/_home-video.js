(function(window, document, $) {
    'use strict';
    if ($('.home-video').length) {
        // $('.home-video div.home-video-box div.inner').slick({
        $('.home-video div.home-video-box div.inner>div.row>div.views-element-container>div').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true
        });
    }
})(window, document, jQuery);