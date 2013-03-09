(function($) {

  Drupal.juan_rueda_respnse = Drupal.juan_rueda_respnse || {};

  Drupal.behaviors.juan_rueda_respnse = {
    attach: function(context) {

      jQuery("a.mapa-google").once('mapa-link').click(function() {
        var url = $(this).attr('href');

        posicion = url.replace(/\//gi, "/");

        posicion1 = posicion.replace('/', "");
        posicion2 = posicion1.replace('/', ",");
        new_text = posicion2.split(',');


        Drupal.gmap.getMap('gmap-auto1map-gmap0').map.setCenter(new google.maps.LatLng(new_text[0], new_text[1]));
        Drupal.gmap.getMap('gmap-auto1map-gmap0').map.setZoom(15);


        return false;
      });

      $('body').bind('responsivelayout', function(e, d) {
        if($(this).hasClass("responsive-layout-mobile")) {
          //menu principal
          $('#block-menu-menu-menu-secciones-principales .content ul').hide();
            if ($('.menu-render').val() == 'Menu') {
              $('.menu-render').css('display', 'block');
            }else{
              $('#block-menu-menu-menu-secciones-principales').prepend('<div class="menu-buscador">Buscador</div><div class="menu-render">Menu</div><a href="/" class="home-movil">Home</a>');
            }

          $('.menu-render').click(function(){
            $('#block-menu-menu-menu-secciones-principales .content ul').toggle();
          });

          //Mapa sitio
          $('#zone-footer .region-footer-first-inner').hide();

          $('#zone-footer').prepend('<div class="mapa-sitio-render">Mapa sitio</div>');


          $('.mapa-sitio-render').click(function(){
            $('#zone-footer .region-footer-first-inner').toggle();
          });

          //Buscador
          $('.menu-buscador').click(function(){
            $('#block-multiblock-1').toggle();
          });


        }
        else {
          $('#block-menu-menu-menu-secciones-principales .content ul').css('display', 'block');
          $('.menu-render').hide();
          $('.menu-buscador').hide();
          $(".home-movil").hide();

          $('#zone-footer .region-footer-first-inner').css('display', 'block');
          $('.mapa-sitio-render').hide();


        }

      });

      if($.browser.version == '7.0')) {
        alert(jQuery.browser.version);
        $("body").removeClass("responsive-layout-wide").addClass("responsive-layout-normal");
      }


  }
}
})(jQuery);
