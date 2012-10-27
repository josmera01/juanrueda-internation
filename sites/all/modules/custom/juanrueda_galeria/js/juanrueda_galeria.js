(function($){
  Drupal.behaviors.juanruedaGaleria = {
    attach: function(context, settings) {
      $('#carousel').elastislide({
        imageW    : Drupal.settings.galeria.view_mode,
        minItems  : 3,
        margin    : 2,
        border    : 0,
        current   : 12
      });

    }
  }
})(jQuery);
