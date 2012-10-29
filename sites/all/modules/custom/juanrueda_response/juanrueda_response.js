(function($) {
  Drupal.behaviors.juan_rueda_respnse = {
    attach: function(context) {
      if($("body").hasClass("responsive-layout-mobile")) {
        alert("Yes, it has!");
      }
  }
}
})(jQuery);
