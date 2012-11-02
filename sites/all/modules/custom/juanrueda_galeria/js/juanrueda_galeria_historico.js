(function($){

  Drupal.juanruedaCamiones = Drupal.juanruedaCamiones || {};

  Drupal.behaviors.juanruedaCamiones = {
    attach: function(context, settings) {

      $('#carousel-historico').elastislide({
        imageW    : 150,
        minItems  : 5,
        margin    : 5,
        border    : 0,
        current   : 5
      });


    }
  }
})(jQuery);
