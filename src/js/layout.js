/*
# Layout JS
# Hero height, etc.
*/

// Start layout specific JS
$(document).ready(function() {
  // Set elements to window height
  function setHeight() {
    windowHeight = $(window).innerHeight()-50;
    //alert(windowHeight);
    $('.hero').css('min-height', windowHeight);
  };
  setHeight();
  $(window).resize(function() {
    setHeight();
  });
});
