/**************************************/
/* Custom JavaScript files supervisor */
/**************************************/

$(document).ready(function() {

		/* Custom */

		//= ./common/tiltfx.js
		//= ./common/owl.carousel.min.js
		//= ./common/newsletter.js
		//= ./common/wholesale.js
		//= ./common/mixitup.js


//////////////////////////////////
	$(function(){
	 $('#Container').mixItUp();
	 });


//////////////////////////////////
		$('.carousel-card').owlCarousel({
			loop:true,
			margin:100,
			nav:false,
			autoplay: 1000,
			responsive:{
					0:{
							items:1
					},
					600:{
							items:1
					},
					1000:{
							items:1
					}
			}
		})

		$('.carousel-about').owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			autoplay: 500,
			responsive:{
					0:{
							items:1
					},
					600:{
							items:1
					},
					1000:{
							items:2
					}
			}
		})

		$('.carousel-feedback').owlCarousel({
			loop:true,
			nav:false,
			autoplay: 100,
			autoplayHoverPause: true,
			items: 1
		})

});