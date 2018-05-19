(function($) {
    $(document).ready(function(){
        $('#formulario_controle').submit(function(){
            var dados = $( this ).serialize();

            $.ajax({
                type: "POST",
                url: "valida_email",
                data: dados,
                success: function( data ) {
                    console.log(data);
                    if (data.retorno == null) {
                        window.location.href = '/cem/form/cadastro-curso';
                    }
                }
            });
            return false;
        });

    });
}(jQuery));