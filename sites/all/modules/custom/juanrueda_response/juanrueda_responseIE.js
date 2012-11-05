(function($) {

  Drupal.juan_rueda_IE = Drupal.juan_rueda_IE || {};

  Drupal.behaviors.juan_rueda_IE = {
    attach: function(context) {
      $('body').bind('responsiveIE', function(e, d) {
        $('body').addClass('responsive-layout-normal');
      });
  }
}
})(jQuery);
