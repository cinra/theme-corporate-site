// jQuery SmoothScroll | Version 09-11-02
$(function() {
	$('a[href*=#]:not(.extLink)').click(function() {

		var duration = 800;// duration in ms
		var offsetTop = 80;
		var easing = 'easeInOutCirc';// easing values: swing | linear

		// get / set parameters
		var newHash = this.hash;
		
		if ($(this.hash).offset() != null) {
			var target = $(this.hash).offset().top - offsetTop;
		} else {
			var target = 0;
		}
		
		var oldLocation=window.location.href.replace(window.location.hash, '');
		var newLocation=this;

		// make sure it's the same location      
		if(oldLocation+newHash==newLocation){
		// animate to target and set the hash to the window.location after the animation
			$('html:not(:animated),body:not(:animated)').animate({ scrollTop: target }, duration, easing, function() {
				//window.location.href=newLocation;
			});
			return false;// cancel default click action
		}
	});
});