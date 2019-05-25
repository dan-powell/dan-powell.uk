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

mix.less('resources/styles/base/base.less', 'public/css/base.css')
    .less('resources/styles/main/base.less', 'public/css/main.css')
    .less('resources/styles/sidebar/base.less', 'public/css/sidebar.css')
    .less('resources/styles/projects/365/base.less', 'public/css/projects/365.css')
    .less('resources/styles/projects/fungifalls/base.less', 'public/css/projects/fungifalls.css')
    .options({

    });

mix.js('resources/scripts/projects/365/base.js', 'public/js/projects/365.js')
    .js('resources/scripts/projects/fungifalls/base.js', 'public/js/projects/fungifalls.js')
    .js('resources/scripts/sidebar/sidebar.js', 'public/js')
    .extract(['animejs']);

mix.browserSync({
    proxy: process.env.APP_DOMAIN,
    open: false,
});
