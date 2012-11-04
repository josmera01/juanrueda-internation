(function($){
  Drupal.behaviors.SeedSelects = {
    attach:function(context, settings){
      $('select').once('select', function() {
        $(this).wrap('<div class="select-jr" />');
      });
    }
  }
}(jQuery));