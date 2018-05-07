export default function() {
  ;(function($) {
    let body = $('body');
    let nav = $('nav');
    let menuTrigger = $('.mt-trigger');
    let menuIsShowing = false;
    let navParent = $('.nav-parent');
    let closeEmailBar = $('.email-bar--close');
    let emailBar = $('.is-y')

    const initMenu = () => {
      if(!menuIsShowing) {
        body.addClass('menu-is-showing');
        navParent.slideDown(100);
        nav.addClass('showing-items');
        menuIsShowing = true;
      } else {
        body.removeClass('menu-is-showing');
        navParent.slideUp(100);
        nav.removeClass('showing-items');
        menuIsShowing = false;
      }
    }

    const hideEmailBar = () =>  emailBar.hide();

    closeEmailBar.on('click', hideEmailBar)
    menuTrigger.on('click', initMenu)


  })(jQuery);
}