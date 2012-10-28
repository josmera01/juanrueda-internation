(function($){

  Drupal.juanruedacalendario = Drupal.juanruedacalendario || {};

  Drupal.behaviors.juanruedacalendario = {
    attach: function(context, settings) {
      $('.has-events div a').click( function() {
        alert('hoña');
        return false;
      });


    }
  }
})(jQuery);
