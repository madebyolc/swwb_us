/*
# Layout JS
# Hero height, etc.
*/

// Start layout specific JS
$(document).ready(function() {
  // Set elements to window height
  function setHeight() {
    windowWidth = $(window).innerWidth();
    windowHeight = $(window).innerHeight();
    windowHeightShort = $(window).innerHeight()-50;
    //alert(windowHeight);
    $('#page').css('max-width', windowWidth);
    $('.pushmenu').css('max-width', windowWidth);
    $('.hero').css('min-height', windowHeight);
    $('.hero-short').css('min-height', windowHeight);
  };
  setHeight();
  $(window).resize(function() {
    setHeight();
  });
});
