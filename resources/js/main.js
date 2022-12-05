/*
(function($){
	"use strict";

	$(window).load(function() {
		var $container = $('#projects-feed'),
		containerWidth = $container.outerWidth();

		$container.masonry({
			itemSelector : '.project',
			columnWidth: function( containerWidth ) {
				if( containerWidth <= 330 ) {
					return 310;
				} else {
					return 330;
				}
			},

			isAnimated: !Modernizr.csstransitions
		});
	});

})(window.jQuery);
*/

const Masonry = require('masonry-layout');
window.addEventListener('load', (event) => {
	var $container = $('#projects-feed'),
		containerWidth = $container.outerWidth();
	var msnry = new Masonry(elem, {
		itemSelector: '.project',
		columnWidth: $container.outerWidth() <= 330 ? 310 : 330
	});
});