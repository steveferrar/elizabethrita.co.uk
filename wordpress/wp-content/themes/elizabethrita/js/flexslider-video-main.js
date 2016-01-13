
/* $(document).ready
---------------------------------------- */

$(document).ready(function(){


	// ----- FlexSlider Video
	// ---------------------------------------------
	var player = document.getElementById('player_1');
	$f(player).addEvent('ready', ready);
	
	function addEvent(element, eventName, callback) {
		if (element.addEventListener) {
			element.addEventListener(eventName, callback, false)
		} else {
			element.attachEvent(eventName, callback, false);
		}
	}
	
	function ready(player_id) {
		var froogaloop = $f(player_id);
		froogaloop.addEvent('play', function(data) {
			$('.flexslider-video').flexslider("pause");
		});
		froogaloop.addEvent('pause', function(data) {
			$('.flexslider-video').flexslider("play");
		});
	}
	
	$('.flexslider-video').fitVids().flexslider({
		animation: 'fade',
		useCSS: false,
		animationLoop: false,
		smoothHeight: true,
		controlNav: false,
		directionNav: false,
		keyboard: true,
		slideshowSpeed:5000,
		animationSpeed:500, 
		start:function(){
			$('.flexImages').show(); 
		},
		before: function(slider){
			$f(player).api('pause');
		}
	});

});