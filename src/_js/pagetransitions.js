export default function() {
	;(function($) {

		let navLinks = $('nav a');
		let body = $('html');
		let shareLinks = $('.is-social-bar a');
		let theMenu = $('.the-menu').children();
		let footerLinks = $('.footer_links')

		let menuLinks = theMenu.clone();

		footerLinks.html(menuLinks)

		 $.centeredPopup = function(options) {
			  var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left,
			  dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top,
			  width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width,
			  height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height,
			  left = ((width / 2) - (options.width / 2)) + dualScreenLeft,
			  top = ((height / 2) - (options.height / 2)) + dualScreenTop,
			  newWindow = window.open(options.url, options.title, 'scrollbars=yes, width='+options.width+', height='+options.height+', top=' + top + ', left=' + left);
			  if (window.focus) { newWindow.focus(); }
			};

		let changeLink = e => {
			e.preventDefault();
			let $t = $(e.currentTarget);
			let setUrl = $t.attr('href');
			body.addClass('is-leaving')
			setTimeout( () => window.location.replace(setUrl), 50)
		}

		let pageReady = () => body.addClass('is-arrived');


		shareLinks.on('click', function(e) {
	    e.preventDefault();
	    var $t = $(this);
	    
	    $.centeredPopup({
	      url: $(this).attr('href'),
	      title: 'Share',
	      width: 400,
	      height: 400
	    });
	  });


		navLinks.on('click', e => changeLink(e))
		$(window).on('load', pageReady);

	})(jQuery);
}