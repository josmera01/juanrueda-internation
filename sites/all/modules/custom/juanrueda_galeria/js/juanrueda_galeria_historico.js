(function($){

  Drupal.juanruedaCamiones = Drupal.juanruedaCamiones || {};

  Drupal.behaviors.juanruedaCamiones = {
    attach: function(context, settings) {

      $('#carousel-historico').elastislide({
        imageW    : 250,
        minItems  : 4,
        margin    : 5,
        border    : 0,
        current   : 12
      });


    }
  }
})(jQuery);
