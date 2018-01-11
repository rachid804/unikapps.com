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

//Enable source map in dev environment
if (process.env.NODE_ENV === 'development') {
    mix.webpackConfig({
        devtool: 'source-map',
    });

}

//Autoload Bootstrap 4 dependencies
mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery'],
    'popper.js': ['Popper']
});

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');
