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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/admin/app.js', 'public/js/admin')
   .sourceMaps();
 
mix.js('resources/js/promoter/app.js', 'public/js/promoter')
   .sourceMaps();

mix.js('resources/js/spinner/app.js', 'public/js/spinner')
   .sourceMaps();

mix.version();
 
