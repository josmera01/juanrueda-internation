(function($) {

  Drupal.juan_rueda_IE = Drupal.juan_rueda_IE || {};

  Drupal.behaviors.juan_rueda_IE = {
    attach: function(context) {
      $('body').bind('responsive_ie', function(e, d) {
        if ($(this).hasClass("responsive-layout-mobile")) {
          alert('hola');
        }
      });
  }
}
})(jQuery);
