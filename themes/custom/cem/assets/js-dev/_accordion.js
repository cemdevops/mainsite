(function(window, document, $) {
  "use strict";
  if ($(".accordion").length) {
    $(".accordion .title").on("click", this, function() {
      console.log(this);

      $(this)
        .parent(".accordion")
        .toggleClass("open");
    });
  }
})(window, document, jQuery);
