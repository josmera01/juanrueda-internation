(function($){

  Drupal.juanruedaCamiones = Drupal.juanruedaCamiones || {};

  Drupal.behaviors.juanruedaCamiones = {
    attach: function(context, settings) {

      $('#carousel-camion').elastislide({
        imageW    : 180,
        minItems  : 7,
        margin    : 2,
        border    : 0,
        current   : 12
      });


    }
  }
})(jQuery);
