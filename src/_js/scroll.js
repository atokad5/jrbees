export default function() {
  ;(function($) {
    let pageScroll = $(window).scrollTop();
    let didScroll = false;
    let heroContent = $('.group--hdr');
    let fadingEl = $('.is-fade');
    let subScribeBar = $('.is-y')
    let naver = $('nav');
    let nav = $('.main-nav');
    let emailClose = $('.email-bar--close');
    let grabBarHeight = subScribeBar.outerHeight();
    let contactNav = $('.contact-nav');
    let isDupl = $('.is-fixed-nav--el');
    let defaultHdr = $('.standard--hdr')
    let hdrHeight = null;

    hdrHeight = defaultHdr.outerHeight();


    let updateScroll = () => {
      didScroll = true;
      pageScroll = $(window).scrollTop();
    }


    let debounce = (func, wait, immediate) => {
      var timeout;
      return function() {
        var context = this, args = arguments;
        var later = function() {
          timeout = null;
          if (!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
      };
    };

    let resizerChange = () => {
      if(subScribeBar.is(':visible')) {
        grabBarHeight = subScribeBar.outerHeight();
      }
      if(defaultHdr.length > 0) {
        hdrHeight = defaultHdr.outerHeight();
      }
    }

    let updateChange = debounce( () => {
      resizerChange();
    }, 250);

    let updateHeight = () => grabBarHeight = 0; 
    



    let navCheck = () => {
      if(pageScroll > grabBarHeight) {
        nav.css({
          position: 'fixed',
          'background-color': '#000000'
        })
      } else {
        nav.css({position: '', 'background-color': ''})
      }
    }

    let scrollTicker = () => {

      if(didScroll) {
        heroContent.css({
          'transform': 'translateY(' + pageScroll / 14 + '%)',
          'opacity': 1 - pageScroll / 500 
        })
        fadingEl.css({
          'opacity': 1 - pageScroll / 500 
        })
        navCheck();

       if(isDupl.length > 0 && defaultHdr.length > 0) {
          if(pageScroll >= hdrHeight) {
            isDupl.css({
              'position': 'fixed',
              'top': naver.outerHeight()
            })
          } else {
            isDupl.css({
              'position': '',
              'top': ''
            })
          }
       }
 
        didScroll = false;
      }
      requestAnimationFrame(scrollTicker)
    }


    requestAnimationFrame(scrollTicker);
    emailClose.on('click', updateHeight);
    $(window).on('scroll', updateScroll);
    $(window).on('load', resizerChange)
    $(window).on('resize', resizerChange);

  })(jQuery);
}