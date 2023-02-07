let mix = require('laravel-mix');

mix
    .copyDirectory('resources/images', 'public/images')
    .sass('resources/scss/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js');