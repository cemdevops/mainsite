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