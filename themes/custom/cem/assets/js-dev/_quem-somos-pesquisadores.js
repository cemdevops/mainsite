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
