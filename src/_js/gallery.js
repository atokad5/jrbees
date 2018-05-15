export default function() {
	;(function($) {

		let galleryImg = $('.image-container');



		var elem = document.querySelector('.content--area');
		var msnry = new Masonry( elem, {
		  // options
		  itemSelector: '.image-container',
		  columnWidth: 200,
		  gutter: 30,
		  fitWidth: true

		});


	})(jQuery);
}