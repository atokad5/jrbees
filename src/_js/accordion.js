export default function() {
	;(function() {
		let faqItem = $('.faq-item--inner');

		let accord = event => {
			let $t = $(event.currentTarget)

			if($t.hasClass('active')) {
				$t.removeClass('active');
				$t.find('p').slideUp(150);
				return;
			}

			faqItem.removeClass('active');
			faqItem.find('p').slideUp(150);
			$t.addClass('active');
			$t.find('p').slideDown(150);
		}


		faqItem.eq(0).addClass('active');
		faqItem.eq(0).find('p').slideDown(0);

		faqItem.on('click', accord)
	})(jQuery);
}