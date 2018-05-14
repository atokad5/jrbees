import $ from 'jquery';
window.$ = $;
window.jQuery = $;

import nav from "./nav.js";
import homeHero from './home-hero.js'
import lazyload from './lazyload.js'
import scroll from './scroll.js'
import ajaxForms from './ajaxForms.js'
import accordion from './accordion.js'
import pageTransitions from './pagetransitions.js'
homeHero();
nav();
lazyload();
scroll();
ajaxForms();
pageTransitions();
accordion();