// Start UX specific JS
$(document).ready(function() {
  $menuLeft = $('.pushmenu-left');
  $nav_list = $('.nav_list');
  $nav_close = $('.nav_close');
  $site = $('.site');

  $nav_list.click(function() {
    $(this).toggleClass('active');
    $site.toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toright');
    $menuLeft.toggleClass('pushmenu-open');
  });

  $nav_close.click(function() {
    $nav_list.toggleClass('active');
    $site.toggleClass('active');
    $('.pushmenu-push').toggleClass('pushmenu-push-toright');
    $menuLeft.toggleClass('pushmenu-open');
  });
});
