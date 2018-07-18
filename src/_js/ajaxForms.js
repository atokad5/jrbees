

export default function() {
	;(function($) {
		
		let mcForms = $('.mcForms');
		let mcFormsNav = $('.mcFormsNav');
		let input = $('.input');
		let inputTwo = $('.inputTwo');
		let msg = $('.msg');
		let msgTwo = $('.msgTwo')
		let honeypot = $('.honeypot');
		let navEl = $('.is-y');
		let closeBar = $('.email-bar--close')

		let hideIt = () => {
			navEl.hide();
		}

		let setCookie = () => {
			Cookies.set('formInput', 'formFilled', { expires: 365 });
		}


		if(Cookies.get('formInput') === "formFilled") {
			hideIt();
		}

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
					beforeSend: function() {
						input.hide();
						msg.html('loading...')
					},
					success: function(data) {
						console.log('success')
			
						if(data.result === "success") {
							msg.html(data.msg)
							Cookies.set('formInput', 'formFilled', { expires: 365 });
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
					beforeSend: function() {
						msgTwo.html('loading...');
						inputTwo.hide();
					},
					success: function(data) {
	
						if(data.result === "success") {
							
							msgTwo.html(data.msg)
							Cookies.set('formInput', 'formFilled', { expires: 365 });
						}
					}
				})
			}

		}

		closeBar.on('click', setCookie)
		mcForms.on('submit', (e) => sendData(e));
		mcFormsNav.on('submit', (e) => sendDataNav(e));

	})(jQuery);
}