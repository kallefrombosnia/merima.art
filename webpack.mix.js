const mix = require('laravel-mix')
require('mix-tailwindcss');

mix
  .tailwind()
  .js('resources/js/*.js', 'public/js/app.js')
  .css('resources/css/style.css', 'public/css')
  .css('resources/css/animate.css', 'public/css')
  .css('resources/css/bootstrap.css', 'public/css')
  .css('resources/css/normalize.css', 'public/css')
  .css('resources/css/icomoon.css', 'public/css').options({
    processCssUrls: false
  })
  .copyDirectory('resources/images', 'public/images')
  .copyDirectory('resources/fonts', 'public/fonts')
 

if (mix.inProduction()) {
  mix.version()
} else {
  mix.sourceMaps()
}
