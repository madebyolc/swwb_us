$(document).ready(function() {
  alert("hello");
  var controller = new ScrollMagic.Controller();

  // PANEL 1

    // Pin this panel
    PINpanel1 = new ScrollMagic.Scene({
      triggerElement: '#panel-1-pin',
      triggerHook: 0,
      duration: '100%'
    })
            .setPin('#panel-1-pin', {pushFollowers: false})
            .addIndicators()
            .addTo(controller);

  // Tween this background
  var TWEENpanel1backgroundsvg = TweenMax.to("#panel-1-pin", 1, {className: "+=scroll"});

  // build scene
  var scene = new ScrollMagic.Scene({triggerElement: "#panel-2", duration: 1000, offset: 0})
          .setTween(TWEENpanel1backgroundsvg)
          .addIndicators()
          .addTo(controller);

});
