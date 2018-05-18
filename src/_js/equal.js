export default function() {
	;(function($){
		let contentBox = $('.blog-content');
		let heightEl = 0;


		function getHeight() {
			if(contentBox.length > 0) {
				// contentBox.each(function( ){
				// 	let $t = $(this);

				// 	if($t.outerHeight() > heightEl ){
				// 		heightEl = $t.outerHeight();
				// 	}
				// })
				// console.log(heightEl);
			var elem = document.querySelector('.content-area');
			var msnry = new Masonry( elem, {
			  itemSelector: '.blog-content',
			  gutter: '.blog-content'  / 2,
			  percentPosition: true,

			});
			}
			// contentBox.css({height: heightEl +'px'})
		}



		$(window).on('load', getHeight)
	})(jQuery);
}