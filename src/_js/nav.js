export default function() {
  ;(function($) {
    let body = $('body');
    let nav = $('nav');
    let menuTrigger = $('.mt-trigger');
    let menuIsShowing = false;

    const initMenu = () => {
      console.log('working')
      if(!menuIsShowing) {
        
        body.addClass('menu-is-showing');
        menuIsShowing = false;
      } else {
        body.removeClass('menu-is-showing');

        menuIsShowing = true;
      }
    }


    menuTrigger.on('click', initMenu)


  })(jQuery);
}