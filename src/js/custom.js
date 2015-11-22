/**************************************/
/* Custom JavaScript files supervisor */
/**************************************/

$(document).ready(function() {

		/* Custom */

		//= ./common/tiltfx.js
		//= ./common/owl.carousel.min.js


		$('.owl-carousel').owlCarousel({
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

});