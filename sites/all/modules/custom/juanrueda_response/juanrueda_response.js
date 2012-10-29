(function($) {
  Drupal.behaviors.juan_rueda_respnse = {
    attach: function(context) {
      $('body').bind('responsivelayout', function(e, d) {
        if($(this).hasClass("responsive-layout-mobile")) {
          console.log("a");
        }
      });
  };
})(jQuery);
