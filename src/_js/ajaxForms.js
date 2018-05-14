export default function() {
	;(function($) {
		let mcForms = $('.mcForms');
		let mcFormsNav = $('.mcFormsNav');
		let input = $('.input');
		let msg = $('.msg');
		let honeypot = $('.honeypot');

		let sendData = (e) => {
			e.preventDefault();
			let $t = $(e.currentTarget);
			let $formTarget = $t.attr('action').replace('post', 'post-json')+'&c=?';

			if(honeypot.val().length === 0) {
				$.ajax({
					url: $formTarget,
					method: 'POST',
					dataType: 'jsonp',
					data: $t.serialize(),
					success: function(data) {
						if(data.result === "success") {
							input.hide();
							msg.html(data.msg)
						}
					}
				})
			}

		}

		let sendDataNav = (e) => {
			e.preventDefault();
			let $t = $(e.currentTarget);
			let $formTarget = $t.attr('action').replace('post', 'post-json')+'&c=?';

			if(honeypot.val().length === 0) {
				$.ajax({
					url: $formTarget,
					method: 'POST',
					dataType: 'jsonp',
					data: $t.serialize(),
					success: function(data) {
						if(data.result === "success") {
							input.hide();
							msg.html(data.msg)
						}
					}
				})
			}

		}

		mcForms.on('submit', (e) => sendData(e));
		mcFormsNav.on('submit', (e) => sendDataNav(e));

	})(jQuery);
}