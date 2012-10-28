(function($){

  Drupal.juanruedacalendario = Drupal.juanruedacalendario || {};

  Drupal.behaviors.juanruedacalendario = {
    attach: function(context, settings) {
      $('.has-events div a').click( function() {
        var contenido = $(this).attr('href');

        var myArray = contenido.split('/');
        console.log();
        url = 'eventos/' + myArray[5]
        $.ajax({
          type: "GET",
          url: url,
          dataType: "script"
        });

        return false;
      });


    }
  }
})(jQuery);
