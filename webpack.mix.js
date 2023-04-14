let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .options({
      processCssUrls: false,
      postCss: [
         require('postcss-import'),
         require('autoprefixer'),
         require('cssnano')({
            preset: 'default',
         })
      ]
   });
