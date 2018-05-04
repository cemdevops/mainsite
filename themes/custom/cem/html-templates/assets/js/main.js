(function (window, document, $) {
  'use strict';

  var $headerNavBar = $('.header-menu');
  var $headerNavBarHeight = $headerNavBar.height();
  var $headerNavBarDistanceToTop = $headerNavBar.offset().top;

  $(window).on('scroll resize', function () {
    if ($(this).scrollTop() > $headerNavBarHeight + $headerNavBarDistanceToTop) {
      $headerNavBar.addClass('fixed');
      return;
    }
    $headerNavBar.removeClass('fixed');

  });

})(window, document, jQuery);
(function(window, document, $) {
    'use strict';
    if ($('.home-pesquisadores').length) {
        //$('.home-publications div.home-publications-box>div.inner').slick({
        // $('.home-pesquisadores div.home-pesquisadores-box>div.row').slick({
        $('.home-pesquisadores div.home-pesquisadores-box>div.row>div.views-element-container>div').slick({
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
(function(window, document, $) {
    'use strict';
    if ($('.home-publications').length) {
        //$('.home-publications div.home-publications-box>div.inner').slick({
        // $('.home-publications div.home-publications-box>div.row').slick({
        $('.home-publications div.home-publications-box>div.row>div.views-element-container>div').slick({
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
(function(window, document, $) {
    'use strict';
    if ($('.home-slider').length) {
        $('.home-slider .wrapper>div.views-element-container>div').slick({
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
/*(function (window, document, $) {
    'use strict';
})(window, document, jQuery);*/