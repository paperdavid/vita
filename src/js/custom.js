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
			dots: true,
			nav:true,
			autoplayHoverPause: true,
			autoplay: 10000,
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
			dots: true,
			nav:true,
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

		$('#carousel-feedback').owlCarousel({
			loop:true,
			autoplay: 100,
			autoplayHoverPause: true,
			items: 1
		})


});