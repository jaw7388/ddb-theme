$(document).ready(function(){

    var menu = $(window)
    //menuTopPosition = menu.offset().top;
    
    
    $(window).bind('scroll', function() {
        scrolling = menu.scrollTop();
        console.log(scrolling)
    var navHeight = $( window ).height();
          if ($(window).scrollTop() > 2) {
            $('.navbar').addClass('sticky');
            //$('.top-bar').hide();
            //$( ".nav-logo" ).css( {"max-height": "50px","padding": "0 0"  });
          }
          else {
              $('.navbar').removeClass('sticky');
              //$('.top-bar').show();
          }
     });
 });