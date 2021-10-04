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

mix
    .js('resources/js/Site/app.js', 'public/js/site')
    .js('resources/js/Painel/app.js', 'public/js/painel')
    .vue()
    .sass('resources/sass/Site/app.scss', 'public/css/site')
    .sass('resources/sass/Painel/app.scss', 'public/css/painel')
    .sourceMaps();
