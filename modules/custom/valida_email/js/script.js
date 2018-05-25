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
                        window.location.href = '/form/cadastro-curso';
                    }else{
                        window.location.href = '/node/'+nid;
                    }
                }
            });
            return false;
        });

        $('#webform-submission-cadastro-curso-add-form').submit(function(){
            var dados = $( this ).serialize();

            $.ajax({
                type: "POST",
                url: "configura_sessao",
                data: dados,
                success: function( data ) {
                    console.log(data);
                    if (data.retorno == null) {
                        window.location.href = '/form/cadastro-curso';
                    }
                }
            });
            return false;
        });

    });
}(jQuery));
