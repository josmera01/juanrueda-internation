(function($) {

  Drupal.juan_rueda_IE = Drupal.juan_rueda_IE || {};

  Drupal.behaviors.juan_rueda_IE = {
    attach: function(context) {
      $('body').bind('responsiveIE', function(e, d) {
        if($(this).hasClass("responsive-layout-mobile")) {
          $('body').addClass('responsive-layout-wide');
        }
      }


      });
  }

})(jQuery);
