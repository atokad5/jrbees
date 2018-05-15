import $ from 'jquery';
window.$ = $;
window.jQuery = $;
import jsCookie from 'js-cookie';
import nav from "./nav.js";
import homeHero from './home-hero.js'
import lazyload from './lazyload.js'
import scroll from './scroll.js'
import ajaxForms from './ajaxForms.js'
import accordion from './accordion.js'
import pageTransitions from './pagetransitions.js'
import Masonry from 'masonry-layout'
import gallery from './gallery.js'
window.Cookies = jsCookie;
window.Masonry = Masonry;
homeHero();
nav();
lazyload();
scroll();
ajaxForms();
pageTransitions();
accordion();
gallery();
