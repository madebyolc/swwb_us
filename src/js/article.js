/*
* # Article
* # Typed, etc.
*/

// Type the page
jQuery(function($){
	$("#typed").typed({
		stringsElement: $('#typed-strings'),
		typeSpeed: 10,
		callback: function() {
			//$('.ah.page-header').toggleClass('off-canvas');
			$('.feature-continue').toggleClass('active');
			$('.feature-buttons').toggleClass('active');
			$('.typed-cursor').toggleClass('blink');
			$('.ah.page-header').toggleClass('fixed');
		}
	});
});

jQuery(function($){
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
