$(document).ready(function() {
  var controller = new ScrollMagic.Controller();

  $('.panel').each(function(){
    var outScene = new ScrollMagic.Scene({
      triggerElement: this,
      triggerHook: 0.9
    })
    .setClassToggle(this, 'fade-in')
    .addIndicators({
      name: 'fade scene'
    })
    .addTo(controller);
  });

  $('.article.entry figure, .article.entry p, .article.entry h1, .article.entry h2, .article.entry h3, .article.entry h4').each(function(){
    var outScene = new ScrollMagic.Scene({
      triggerElement: this,
      triggerHook: 0.9
    })
    .setClassToggle(this, 'fade-in')
    .addIndicators({
      name: 'fade article elements'
    })
    .addTo(controller);
  });

  // Control GTEM Page

  function pathPrepare ($el) {
		var lineLength = $el[0].getTotalLength();
		$el.css("stroke-dasharray", lineLength);
		$el.css("stroke-dashoffset", lineLength);
	}

	var $word = $("path#word");
	var $dot = $("path#dot");

	// prepare SVG
	pathPrepare($word);
	pathPrepare($dot);

	// build tween
	var tween = new TimelineMax()
		.add(TweenMax.to($word, 0.9, {strokeDashoffset: 0, ease:Linear.easeNone})) // draw word for 0.9
		.add(TweenMax.to($dot, 0.1, {strokeDashoffset: 0, ease:Linear.easeNone}))  // draw dot for 0.1
		.add(TweenMax.to("path", 1, {stroke: "#33629c", ease:Linear.easeNone}), 0);			// change color during the whole thing

	// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#panel-1", duration: "90%", tweenChanges: true})
					.setTween(tween)
					.addTo(controller);

});
