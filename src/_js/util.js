export default function() {
	;(function($) {
		let theText = $('.featured-article-excerpt');
		let newText = '';
		let textLength = 65;

		if(theText.length > 0 ) {
			let wrapText = theText.html().split(' ');
			for(var i = 0; i < textLength; i++) {
				newText +=  wrapText[i]+ ' ';
			}
		}

		theText.html(`<p> ${newText}... </p>`)
	})(jQuery);
}