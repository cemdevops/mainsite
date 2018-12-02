(function (window, document, $) {
    'use strict';


    if ($('.quem-somos-menu').length) {
        console.log($('.quem-somos-menu li.active').parent().parent().is('li'));
        
        if ( $('.quem-somos-menu li.active').parent().parent().is('li') ){
            $('.quem-somos-menu li.active').parent().parent().addClass('active')
        }
        else{
            console.log('errou');
            
        }
    }
})(window, document, jQuery);