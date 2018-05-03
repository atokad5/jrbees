import $ from 'jquery';
window.$ = $;
window.jQuery = $;

import nav from "./nav.js";
import homeHero from './home-hero.js'
import lazyload from './lazyload.js'
homeHero();
nav();
lazyload();