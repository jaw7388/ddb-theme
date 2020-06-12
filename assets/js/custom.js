/**
 * Sticky menu
 * */

$(document).ready(function(){
    $(window).bind('scroll', function() {
          if ($(window).scrollTop() > 2) {
            $('.header .navbar').addClass('sticky');
          }
          if ($(window).scrollTop() > 150) {
            $('.header-test .navbar').addClass('sticky-test');
          }
          else {
              $('.header .navbar').removeClass('sticky');
              $('.header-test .navbar').removeClass('sticky-test');
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