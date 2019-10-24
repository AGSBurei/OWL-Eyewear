/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.scss');
require('../css/base.css');
require('../css/homeStyle.css');
require('../css/login.css');
require('../css/faq.css');
//require('./jquery.countdown.js');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
const $ = require('jquery');

require('bootstrap/dist/js/bootstrap.bundle');
global.$ = global.jQuery = $;

$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});

import 'bootstrap/dist/js/bootstrap';

const imagesContext = require.context('../images', true, /\.(png|jpg|jpeg|gif|ico|svg|webp)$/);
imagesContext.keys().forEach(imagesContext);