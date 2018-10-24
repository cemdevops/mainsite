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