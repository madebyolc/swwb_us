/*
* # UX JS
* Auto-hide Header, Push Menu, etc.
*/

// Start Auto-hide Header
(function($){
  $(function(){
    var scroll = $(document).scrollTop();
    var headerHeight = $('.ah.page-header').outerHeight();

    $(window).scroll(function() {
      var scrolled = $(document).scrollTop();
      if (scrolled > headerHeight){
        $('.ah.page-header').addClass('off-canvas');
      } else {
        $('.ah.page-header').removeClass('off-canvas');
      }

        if (scrolled > scroll){
         $('.ah.page-header').removeClass('fixed');
        } else {
        $('.ah.page-header').addClass('fixed');
        }
      scroll = $(document).scrollTop();
     });

   });
})(jQuery);
// ----------------------------- end Auto-hide Header

// Start Push Menu
$(document).ready(function() {
  $menuLeft = $('.pushmenu-left');
  $nav_list = $('.nav_list');
  $nav_close = $('.nav_close');
  $navbar = $('.site-navigation');
  $site = $('.site');

  $nav_list.click(function() {
    $(this).toggleClass('active');
    $navbar.toggleClass('active');
    $site.toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toright');
    $menuLeft.toggleClass('pushmenu-open');
  });

  $nav_close.click(function() {
    $nav_list.toggleClass('active');
    $navbar.toggleClass('active');
    $site.toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toright');
    $menuLeft.toggleClass('pushmenu-open');
  });
});
// ----------------------------- end Push Menu
