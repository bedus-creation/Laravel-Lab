const mix = require('laravel-mix');

var tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/app.scss', 'public/css')
  .options({
    processCssUrls: false,
    postCss: [ tailwindcss('tailwind.js') ],
  });
