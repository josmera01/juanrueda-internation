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
              $('#block-menu-menu-menu-secciones-principales').prepend('<div class="menu-render">Menu</div>');
            }

          $('.menu-render').click(function(){
            $('#block-menu-menu-menu-secciones-principales .content ul').toggle();
          });

          $('#zone-footer .grid-12').hide();

          if ($('#zone-footer').val() == 'Menu') {
              $('#zone-footer').css('display', 'block');
          }else{
            $('#zone-footer').prepend('<div class="mapa-sitio-render">Mapa sitio</div>');
          }

          $('.mapa-sitio-render').click(function(){
            $('#zone-footer .grid-12').toggle();
          });


        }
        else {
          $('#block-menu-menu-menu-secciones-principales .content ul').css('display', 'block');
          $('.menu-render').hide();

          $('#zone-footer .grid-12').css('display', 'block');
          $('.mapa-sitio-render').hide();

        }
      });
  }
}
})(jQuery);
