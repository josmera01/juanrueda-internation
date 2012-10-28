(function($){

  Drupal.juanruedacalendario = Drupal.juanruedacalendario || {};

  Drupal.behaviors.juanruedacalendario = {
    attach: function(context, settings) {
      $('.has-events div a').click( function() {
        var contenido = $(this).attr('href');

        var myArray = contenido.split('/');

        url = '/eventos/' + myArray[5];

        $('#result-eventos').load(eventos, function() {
          alert('hola');
        });

        return false;
      });


    }
  }
})(jQuery);
