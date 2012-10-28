(function($){

  Drupal.juanruedacalendario = Drupal.juanruedacalendario || {};

  Drupal.behaviors.juanruedacalendario = {
    attach: function(context, settings) {
      $('.has-events div a').click( function() {
        var i = $(this).attr('href');
        alert(i);
        return false;
      });


    }
  }
})(jQuery);
