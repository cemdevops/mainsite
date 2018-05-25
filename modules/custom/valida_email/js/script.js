(function($) {
    $(document).ready(function(){

        $('#formulario_controle').submit(function(){
            var dados = $( this ).serialize();
            var nid  = $("#id_curso").val();
            console.log(nid);
            $.ajax({
                type: "POST",
                url: "valida_email",
                data: dados,
                success: function( data ) {
                    if (data.retorno == null) {
                        window.location.href = '/form/cadastro-curso?nid='+nid;
                    }else{
                        window.location.href = '/node/'+nid;
                    }
                }
            });
            return false;
        });

        $('#webform-submission-cadastro-curso-add-form').submit(function(){

            $.urlParam = function(name){
                var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                return results[1] || 0;
            };
            var dados = $( this ).serialize();
            var nid = $.urlParam('nid');
            console.log(nid);
            $.ajax({
                type: "POST",
                url: "configura_sessao",
                data: dados,
                success: function( data ) {
                }
            });
            window.location.href = '/node/'+nid;
            return false;
        });

    });
}(jQuery));
