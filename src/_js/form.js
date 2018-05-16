export default function() {
	;(function($) {
		let formInput = $('.theFormEl');
		let bodyClass = $('body').hasClass('page-template-contact');


		
		const checkForm = e => {
			let $t = $(e.currentTarget);
			if($t.val().length > 0) {
				$t.addClass('is-filled');
			} else {
				$t.removeClass('is-filled');
			}
		}

		
		formInput.on('keyup', checkForm)
	




	})(jQuery);
}