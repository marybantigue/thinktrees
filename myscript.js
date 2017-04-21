




(function( $ ) {

  $(document).ready(function () {
      $(window).scroll(function (event) {

          var y = $(this).scrollTop();

          if (y >= 100) {
              $('#main-menu').addClass('darken');

          }
          if (y <= 99) {
              $('#main-menu').removeClass('darken');

          }


      });

  });
})(jQuery);
