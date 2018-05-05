export default function() {
  ;(function($) {
    let nav = $('nav');
    let saveEl = $('.save');
    let heroContent = $('.inner-content--hdr');
    let homeHero = $('.is-home, .has-height');
    let saveElHeight =  saveEl.outerWidth();
    let heroHeight = heroContent.outerHeight();
    let spacer = $('.spacer');
    
    


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


    let setHeroHeight = () => {
     homeHero.css({'min-height': '0px'})
     saveElHeight =  saveEl.outerWidth();
     heroHeight = heroContent.outerHeight();
     homeHero.css({'min-height': 120 + saveElHeight + heroHeight +'px'})
     spacer.css({
       height: nav.outerHeight()
     });
    }

    let updateHeight = debounce( () => {
      setHeroHeight();
    }, 250);
    
    $(window).on('resize', updateHeight);
    setHeroHeight();

    console.log(saveEl.outerWidth())
  })(jQuery);
}