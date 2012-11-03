(function($) {

  Drupal.juan_rueda_respnse = Drupal.juan_rueda_respnse || {};

  Drupal.behaviors.juan_rueda_respnse = {
    attach: function(context) {
      $('body').bind('responsivelayout', function(e, d) {
        if($(this).hasClass("responsive-layout-mobile")) {
          //menu principal
          $('#block-menu-menu-menu-secciones-principales .content ul').hide();
            if ($('.menu-render').val() == 'Menu') {
              $('.menu-render').css('display', 'block');
            }else{
              $('#block-menu-menu-menu-secciones-principales').prepend('<a href="/" class="home-movil">Home</a><div class="menu-render">Menu</div><div class="menu-buscador">Buscador</div>');
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
  }
}
})(jQuery);
