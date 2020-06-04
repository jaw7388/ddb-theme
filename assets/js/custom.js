/**
 * Sticky menu
 * */

$(document).ready(function(){
    $(window).bind('scroll', function() {
          if ($(window).scrollTop() > 2) {
            $('.navbar').addClass('sticky');
          }
          else {
              $('.navbar').removeClass('sticky');
          }
     });
 });

 /**
 * Preloader
 * */
$(window).on('load', function() { // makes sure the whole site is loaded
    $('#status').fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(10).fadeOut(700 ); // will fade out the white DIV that covers the website.
    $('body').delay(50).css({'overflow':'visible'});
})