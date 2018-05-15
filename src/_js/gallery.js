export default function() {
	;(function($) {

		let galleryImg = $('.image-container');



		var elem = document.querySelector('.content--area');
		var msnry = new Masonry( elem, {
		  itemSelector: '.image-container',
		  columnWidth: '.image-container',
		  percentPosition: true,
		  fitWidth: true

		});


	})(jQuery);
}