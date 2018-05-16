export default function() {
	;(function($) {

		let galleryImg = $('.image-container');


		if($('body').hasClass('page-template-photoalbum')) {
			var elem = document.querySelector('.content--area');
			var msnry = new Masonry( elem, {
			  itemSelector: '.image-container',
			  gutter: 10,
			  percentPosition: true,

			});
	
		}

	})(jQuery);
}