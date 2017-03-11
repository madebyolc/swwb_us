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
    windowHeightQuarter = $(window).innerHeight()/4;
    windowHeightHalf = $(window).innerHeight()/2;
    windowHeightThreeQuarters = $(window).innerHeight()/4*3;
    windowHeightShort = $(window).innerHeight()-50;
    //alert(windowHeight);
    $('#page').css('max-width', windowWidth);
    $('.pushmenu').css('max-width', windowWidth);
    $('.hero').css('min-height', windowHeight);
    $('.hero-short').css('min-height', windowHeight);
    $('#wrapper-footer').css('min-height', windowHeightHalf);
    $('.wrapper.search-wrapper').css('min-height', windowHeight);
    $('.feature-background').css('max-height', windowHeight);
    // Pages
    $('.panel.h100').css('min-height', windowHeight);
    $('.panel.h100').css('height', windowHeight);
    $('.panel.h75').css('min-height', windowHeightThreeQuarters);
    $('.panel.h75').css('height', windowHeightThreeQuarters);
    $('.panel.h50').css('min-height', windowHeightHalf);
    $('.panel.h50').css('height', windowHeightHalf);
    $('.panel.h25').css('height', windowHeightQuarter);
    $('.panel.h25').css('min-height', windowHeightQuarter);
    $('.panel.hShort').css('min-height', windowHeightShort);
    $('.panel.hShort').css('height', windowHeightShort);
    //REVIEW might need to add the above function to all wrappers
  };
  setHeight();
  $(window).resize(function() {
    setHeight();
  });

});
