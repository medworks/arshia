/**
 * Functionality specific to newyork theme shortcode plugin.
 *
 * Provides helper functions to enhance the theme experience.
 */

(function($) {

	// Using strict mode

	"use strict";

	$(window).load(function() {

		$('.gallery .packery').each(function(){
			
			var id = 1 * $(this).attr('data-id');

			var pckry = new Packery( document.querySelector( '#packery_'+id ), {
				/* options */
				itemSelector: '.gallery_item',
				transitionDuration: '0',
				columnWidth: '#grid-sizer-'+id
			});

			/* fix needed when using images */
			$(this).parents('.gallery').removeClass('loading');
			pckry.layout();
			$(this).css('opacity',0);
			$(this).animate({opacity: 1},500);
		});

		$(window).resize();
	});

})(jQuery);
