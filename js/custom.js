jQuery(document).ready(function ($) {
    wow = new WOW(
        {
        mobile: false
      }
      );
      wow.init();
  
      if ($(window).width() > 1025) {
        skrollr.init({
          forceHeight: false,
          
        });
      }

});