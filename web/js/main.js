$(function() {
  'use strict';

  $(".js--show_menu").on("click", function(){
    $(this).toggleClass('close--menu')
    $(".header__menu").slideToggle();
  });

  $('.trigger__link[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top -70
        }, 1000);
        return false;
      }
    }
  });

  $(".header__menu a").on("click", function(){
    $(this).parent().parent().children('li').each(function(index, el) {
      console.log($(this));
      if($(this).hasClass('active')) {
        $(this).removeClass('active');
      };
    });
    $(this).parent().addClass('active');
  });

  $(".threesixty.product1").on('click', function() {
    console.log('taquito');
  });
  $(".threesixty_images").on('click', function() {
    console.log('taquito');
  });
  $(".product1").on('click', function() {
    console.log('taquito');
  });
});

jQuery.browser = {};
(function () {
  jQuery.browser.msie = false;
  jQuery.browser.version = 0;
  if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
    jQuery.browser.msie = true;
    jQuery.browser.version = RegExp.$1;
  }
})();
