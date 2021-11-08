const mix = require('laravel-mix');

mix.sass('resources/css/app.scss', 'public/css')
  .js('node_modules/@popperjs/core/dist/umd/popper.min.js', 'public/js/popper.js')
  .js('resources/js/bootstrap.js', 'public/js/app.js')
  .js('resources/js/builder.jsx', 'public/js/builder.js')
  .react()
  .disableNotifications();
