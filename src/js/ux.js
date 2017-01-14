/*
* # UX JS
* Auto-hide Header, Push Menu, etc.
*/
//alert("UX Loaded");
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
  $page = $('.page-button');
  $nav_panel = $('global-menu ul li a');
  $slide = $('#menu-global a');

  $nav_list.click(function() {
    $(this).toggleClass('active');
    $navbar.toggleClass('active');
    $('body').toggleClass('overflow');
    $site.toggleClass('active');
    $page.toggleClass('active'); // Page Button
    $('.pushmenu-push').toggleClass('pushmenu-push-toright'); // Move Site
    $menuLeft.toggleClass('pushmenu-open'); // Show Menu
  });

  $nav_close.click(function() {
    $nav_list.toggleClass('active');
    $navbar.toggleClass('active');
    $('body').toggleClass('overflow');
    $site.toggleClass('active');
    $page.toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toright');
    $menuLeft.toggleClass('pushmenu-open');
  });

  $page.click(function() {
    $nav_list.toggleClass('active');
    $navbar.toggleClass('active');
    $('body').toggleClass('overflow');
    $site.toggleClass('active');
    $page.toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toright');
    $menuLeft.toggleClass('pushmenu-open');
  });

});
// ----------------------------- end Push Menu

// Start Smooth Scroll (by ID)
jQuery(function($) {

$('a[href^="#"]').live('click',function(event){
    event.preventDefault();
    var target_offset = $(this.hash).offset() ? $(this.hash).offset().top : 0;
    //change this number to create the additional off set
    var customoffset = 0;
    $('html, body').animate({scrollTop:target_offset - customoffset}, 500);
});

}(jQuery));
// ----------------------------- end Smooth Scroll
