(function($) {
  "use strict";
  
 // menu 
  $('.siteBar-btn').click( function (){ 
    $('.mobile-menu').toggleClass('siteBar');   
    $('body').toggleClass('ovhidden');   
  }); 



  $(function() {
    $(".accordion-header").click(function(event) {
      event.preventDefault();
      var dis = $(this);
      var acr_box = dis.closest(".accordion");
      if(!dis.hasClass("active-accordion")){
        acr_box.find(".accordion-header").removeClass("active-accordion");
        dis.addClass("active-accordion");
        acr_box.find(".accordion-content").slideUp();
        dis.next().stop(true,true).slideToggle();
      }
    });
  });

  AOS.init({
    mirror: true,
    duration: 1500,
    initClassName: 'aos-init',
    once: true,
  });

})(jQuery);
