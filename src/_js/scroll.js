export default function() {
  ;(function($) {
    let pageScroll = $(window).scrollTop();
    let didScroll = false;
    let heroContent = $('.group--hdr');

    let updateScroll = () => {
      didScroll = true;
      pageScroll = $(window).scrollTop();
    }

    let scrollTicker = () => {
      if(didScroll) {
        heroContent.css( {
          'transform': 'translateY(' + pageScroll / 14 + '%)',
          'opacity': 1 - pageScroll / 500 
        })

        didScroll = false;
      }
      requestAnimationFrame(scrollTicker)
    }


    requestAnimationFrame(scrollTicker)
    $(window).on('scroll', updateScroll);

  })(jQuery);
}