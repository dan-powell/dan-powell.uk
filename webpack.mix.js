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

if (mix.inProduction()) {
    mix.version();
}

mix.sass('resources/styles/base/base.scss', 'public/css/base.css')
    .sass('resources/styles/main/base.scss', 'public/css/main.css')
    .sass('resources/styles/sidebar/base.scss', 'public/css/sidebar.css')
    .sass('resources/styles/projects/365/base.scss', 'public/css/projects/365.css')
    .sass('resources/styles/projects/fungifalls/base.scss', 'public/css/projects/fungifalls.css')
    .options({

    });

mix.js(['resources/scripts/main/base.js', 'resources/scripts/main/_home.js'], 'public/js/main.js')
    .js('resources/scripts/projects/365/base.js', 'public/js/projects/365.js')
    .js('resources/scripts/projects/fungifalls/base.js', 'public/js/projects/fungifalls.js')
    .js('resources/scripts/sidebar/sidebar.js', 'public/js')
    .extract(['animejs']);

mix.browserSync({
    proxy: process.env.APP_DOMAIN,
    open: false,
});
