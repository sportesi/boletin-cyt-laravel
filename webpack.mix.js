let mix = require('laravel-mix');

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

/* Frontend Assets */

// mix.js('resources/assets/js/app.js', 'public/js')
//     .sass('resources/assets/sass/app.scss', 'public/css')
//     .copyDirectory('resources/assets/images', 'public/images')
// ;

/* Backoffice Scripts */
mix.js('resources/backoffice_assets/js/app.js', 'public/backoffice/js/app.min.js');
mix.sass('resources/backoffice_assets/css/app.sass', 'public/backoffice/css/app.min.css');
mix.copy('node_modules/admin-lte/dist/img', 'public/backoffice/img');
