
/* $(document).ready
---------------------------------------- */

$(document).ready(function(){
	
	"use strict";


	// ----- No JS
	// ---------------------------------------------
	$('html').removeClass('no-js');


	// ----- FlexSlider
	// ---------------------------------------------
	$('.flexslider').flexslider({
		animation: 'fade',
		controlNav: false,
		directionNav: false,
		keyboard: true,
		slideshowSpeed:5000,
		animationSpeed:500, 
		start:function(){
			$('.flexImages').show(); 
		}
	});


	// ----- Menu Button
	// ---------------------------------------------
	$('.menu-button').click(function(){
		$('#nav-icon').toggleClass('open');
		$('#mobile-navigation').stop().slideToggle();
	});


});


$(window).load(function(){

	// ----- Sly
	// ---------------------------------------------
	jQuery(function($){
	
		(function () {
			var $frame  = $('.sly-frame');
			var $slidee = $frame.children('ul').eq(0);
			var $wrap   = $frame.parent();
	
			// Call Sly on frame
			$frame.sly({
				startAt:0,
				horizontal:true,
				mouseDragging:true,
				touchDragging:true,
				releaseSwing:true,
				scrollBar:$wrap.find('.sly-scrollbar'),
				itemNav:'basic',
				smart:true,
				activateOn:'click',
				scrollBy:1,
				speed: 300,
				elasticBounds:true,
				easing:'easeOutExpo',
				dragHandle:true,
				dynamicHandle:true,
				clickBar:true
			});
			
		}());
	
	});

});