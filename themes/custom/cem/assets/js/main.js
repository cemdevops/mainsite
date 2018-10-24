(function(window, document, $) {
    'use strict';
    if ($('.agenda-slider').length) {
        $('.agenda-slider>.inner').slick({
            dots: false,
            infinite: true,
            speed: 400,
            //cssEase: 'linear',
            slidesToShow: 6,
            //lazyLoad: 'ondemand'
            responsive: [
                {
                    breakpoint: 1280,
                    settings: {
                        slidesToShow: 5
                    }
                },
                {
                    breakpoint: 990,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 650,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 450,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

    }
})(window, document, jQuery);
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
(function (window, document, $) {
    'use strict';
    if($('.side-bar-box.inscricoes').length){
        var inscricaoValorBase = $('.inscricao-valor-total .recebe-valor').html();
        inscricaoValorBase = inscricaoValorBase.replace(',','.');
        inscricaoValorBase = +inscricaoValorBase;
        var inscricaoValorRecebe = $('.inscricao-valor-total .recebe-valor');

        var inscricaoValorTotal;

        var conviteField  = $('.convites-number');
        var conviteQtd  = $('.convites-number').attr('value');
        var conviteQtd  = +conviteQtd;
        var $btnPlus = $('.incricao-convites .number .plus');
        var $btnLow = $('.incricao-convites .number .low');

        
        $btnPlus.on('click',function(){
            conviteField.attr('value', ++conviteQtd);
        });
        $btnLow.on('click',function(){
            if(conviteQtd == 0){
                return false;
            }
            conviteField.attr('value', --conviteQtd);
        });
    }
})(window, document, jQuery);
(function(window, document, $) {
  "use strict";
  $(".quem-somos-conteudo-col .field_pos_doutorandos").on("click", function() {
    $(this).toggleClass("open");
  });
  $(".quem-somos-conteudo-col .field_bolsistas_e_pesquisadores").on(
    "click",
    function() {
      $(this).toggleClass("open");
    }
  );
  $(".quem-somos-conteudo-col .field_pesquisadores_associados").on(
    "click",
    function() {
      $(this).toggleClass("open");
    }
  );
  $(".quem-somos-conteudo-col .field_pesquisadores_visitantes").on(
    "click",
    function() {
      $(this).toggleClass("open");
    }
  );
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