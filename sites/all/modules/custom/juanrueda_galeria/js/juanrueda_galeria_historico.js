(function($){

  Drupal.juanruedaCamiones = Drupal.juanruedaCamiones || {};

  Drupal.behaviors.juanruedaCamiones = {
    attach: function(context, settings) {

      $('#carousel-historico').elastislide({
        imageW    : 150,
        minItems  : 3,
        margin    : 5,
        border    : 0,
        current   : 3
      });


    }
  }
})(jQuery);
