(function($){

  Drupal.juanruedacalendario = Drupal.juanruedacalendario || {};

  Drupal.behaviors.juanruedacalendario = {
    attach: function(context, settings) {
      try {

      $('.has-events div a').click( function() {
        var contenido = $(this).attr('href');

        var myArray = contenido.split('/');

        url = '/eventos/' + myArray[5];

        $('#result-eventos').load(url, function() {

        });

        return false;
      });
      }
      catch(e) {

      }


    }
  }
})(jQuery);
