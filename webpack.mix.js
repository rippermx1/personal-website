const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/template/css/bootstrap.css',
    'resources/template/css/font-awesome.min.css',
    'resources/template/css/tootik.css',
    'resources/template/css/magnific-popup.css',
    'resources/template/css/swiper.css',
    'resources/template/css/animate.css',
    'resources/template/css/style.css',
    'resources/template/css/responsive.css',
    'resources/template/css/colors/light.css',
    'resources/template/css/colors/color1-0487cc.css'
],'public/css/app.css')
.scripts([
    'resources/template/js/jquery.min.js',
    'resources/template/js/bootstrap.min.js',
    'resources/template/js/jquery.magnific-popup.min.js',
    'resources/template/js/swiper.min.js',
    'resources/template/js/jquery.easypiechart.min.js',
    'resources/template/js/wow.min.js',
    'resources/template/js/validator.min.js',
    'resources/template/js/form-scripts.js',
    'resources/template/js/script.js'
], 'public/js/app.js').version();


