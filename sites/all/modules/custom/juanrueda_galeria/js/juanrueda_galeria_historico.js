(function($){

  Drupal.juanruedaCamiones = Drupal.juanruedaCamiones || {};

  Drupal.behaviors.juanruedaCamiones = {
    attach: function(context, settings) {

      $('#carousel-historico').elastislide({
        imageW    : 250,
        minItems  : 1,
        margin    : 20,
        border    : 1,
        current   : 0,


      });


    }
  }
})(jQuery);
