export default function() {
	;(function($) {

		let navLinks = $('nav a');
		let body = $('html')

		let changeLink = e => {
			e.preventDefault();
			let $t = $(e.currentTarget);
			let setUrl = $t.attr('href');
			body.addClass('is-leaving')
			setTimeout( () => window.location.replace(setUrl), 50)
		}

		let pageReady = () => body.addClass('is-arrived');


		navLinks.on('click', e => changeLink(e))
		$(window).on('load', pageReady);

	})(jQuery);
}