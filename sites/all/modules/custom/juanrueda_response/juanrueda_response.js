(function($) {

  Drupal.juan_rueda_respnse = Drupal.juan_rueda_respnse || {};

  Drupal.behaviors.juan_rueda_respnse = {
    attach: function(context) {
      $('body').bind('responsivelayout', function(e, d) {
        if($(this).hasClass("responsive-layout-mobile")) {
          $('#block-menu-menu-menu-secciones-principales .content ul').hide();
            if ($('.menu-render').val() == 'Menu principal') {
              $('.menu-render').css('display', 'block');
            }else{
              $('#block-menu-menu-menu-secciones-principales').append('<div class="menu-render">Menu principal</div>');
            }

          $('.menu-render').click(function(){
            $('#block-menu-menu-menu-secciones-principales .content ul').toggle();
          });
        }
        else {
          $('#block-menu-menu-menu-secciones-principales .content ul').css('display', 'block');
          $('.menu-render').hide();
        }
      });
  }
}
})(jQuery);
