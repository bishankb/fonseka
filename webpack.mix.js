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

/*
 |--------------------------------------------------------------------------
 | Backend
 |--------------------------------------------------------------------------
 |
 */

mix.scripts([
    'resources/assets/metronic/global/plugins/jquery.min.js',
  	'resources/assets/metronic/global/plugins/bootstrap/js/bootstrap.min.js',
  	'resources/assets/metronic/global/plugins/bootstrap-editable/bootstrap-editable/js/bootstrap-editable.min.js',
  	'resources/assets/metronic/global/scripts/app.min.js',
  	'resources/assets/metronic/pages/scripts/components-date-time-pickers.min.js',
  	'resources/assets/metronic/layouts/layout/scripts/layout.min.js',
    'resources/assets/metronic/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
    'resources/assets/metronic/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js',
    'resources/assets/metronic/global/plugins/bootstrap-sweetalert/sweetalert.min.js',
    'resources/assets/metronic/global/plugins/select2/js/select2.min.js',
    'resources/assets/metronic/global/plugins/amcharts/amcharts/amcharts.js',
    'resources/assets/metronic/global/plugins/amcharts/amcharts/serial.js',
    'resources/assets/metronic/global/plugins/amcharts/amcharts/pie.js',
    'resources/assets/metronic/global/plugins/amcharts/amcharts/themes/light.js',
    'resources/js/sweet-alert.js',
    'resources/js/custom.js',
], 'public/js/backend.js');


mix.styles([
    'resources/assets/metronic/global/plugins/bootstrap/css/bootstrap.min.css',
    'resources/assets/metronic/global/plugins/font-awesome/css/font-awesome.min.css',
    'resources/assets/metronic/global/plugins/simple-line-icons/simple-line-icons.min.css',
    'resources/assets/metronic/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css',
    'resources/assets/metronic/global/css/components.min.css',
    'resources/assets/metronic/global/css/plugins.min.css',
    'resources/assets/metronic/global/plugins/bootstrap-editable/bootstrap-editable/css/bootstrap-editable.css',
    'resources/assets/metronic/layouts/layout/css/layout.min.css',
    'resources/assets/metronic/layouts/layout/css/themes/darkblue.min.css',
    'resources/assets/metronic/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css',
    'resources/assets/metronic/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
    'resources/assets/metronic/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css',
    'resources/assets/metronic/layouts/layout/css/custom.min.css',
    'resources/assets/metronic/global/plugins/bootstrap-sweetalert/sweetalert.css',
    'resources/assets/metronic/global/plugins/select2/css/select2.min.css',
    'resources/assets/metronic/global/plugins/select2/css/select2-bootstrap.min.css',
    'resources/assets/metronic/global/css/plugins.min.css',
    'resources/assets/metronic/global/css/plugins.min.css',
    'resources/css/semantic-label.css',
    'resources/css/custom.css',
], 'public/css/backend.css');


mix.copyDirectory('resources/assets/metronic/global/plugins/font-awesome/fonts', 'public/fonts');
mix.copyDirectory('resources/assets/metronic/global/plugins/simple-line-icons/fonts', 'public/css/fonts');
mix.copyDirectory('resources/assets/metronic/global/plugins/bootstrap/fonts/bootstrap', 'public/fonts/bootstrap');
mix.copyDirectory('resources/assets/metronic/global/plugins/ckeditor', 'public/plugins/ckeditor');


/*
 |--------------------------------------------------------------------------
 | Backend Auth
 |--------------------------------------------------------------------------
 |
 */
mix.styles([
    'resources/assets/metronic/global/plugins/font-awesome/css/font-awesome.min.css',
    'resources/assets/metronic/global/plugins/simple-line-icons/simple-line-icons.min.css',
    'resources/assets/metronic/global/plugins/bootstrap/css/bootstrap.min.css',
    'resources/assets/metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
    'resources/assets/metronic/global/plugins/select2/css/select2.min.css',
    'resources/assets/metronic/global/plugins/select2/css/select2-bootstrap.min.css',
    'resources/assets/metronic/global/css/components.min.css',
    'resources/assets/metronic/global/css/plugins.min.css',
    'resources/assets/metronic/global/css/login.min.css',
    'resources/css/semantic-label.css',
    'resources/css/custom.css',
], 'public/css/auth.css');