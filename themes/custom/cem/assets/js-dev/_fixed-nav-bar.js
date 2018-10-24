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