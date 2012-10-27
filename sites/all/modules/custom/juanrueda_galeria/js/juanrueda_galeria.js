(function($){
  Drupal.behaviors.juanruedaGaleria = {
    attach: function(context, settings) {
      $('#carousel').elastislide({
        imageW    : 3,
        minItems  : Drupal.settings.galeria.view_mode,
        margin    : 2,
        border    : 0,
        current   : 12
      });

    }
  }
})(jQuery);
