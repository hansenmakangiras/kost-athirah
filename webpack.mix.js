var mix = require('laravel-mix');

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


   //.sass('resources/assets/sass/app.scss', 'public/css');
mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/template/js/dashboard.js', 'public/js/dashboard-custom.js')
    .js('resources/template/js/katniss.js', 'public/js/katniss-custom.js')
    .js('resources/template/js/ResizeSensor.js', 'public/js/ResizeSensor-custom.js')
    .sass('resources/template/scss/katniss.scss', 'public/css');
    // .js('resources/template/js/widgets.js', 'public/js')
    // .js('resources/template/js/chart.chartjs.js', 'public/js')
    // .js('resources/template/js/chart.flot.js', 'public/js')
    // .js('resources/template/js/chart.morris.js', 'public/js')
    // .js('resources/template/js/chart.rickshaw.js', 'public/js')
    // .js('resources/template/js/chart.sparkline.js', 'public/js')
    // .js('resources/template/js/map.apple.js', 'public/js')
    // .js('resources/template/js/map.bluewater.js', 'public/js')
    // .js('resources/template/js/map.mapbox.js', 'public/js')
    // .js('resources/template/js/map.shadesofgray.js', 'public/js')
    // .js('resources/template/js/map.shiftworker.js', 'public/js')
    // .js('resources/template/js/jquery.vmap.sampledata.js', 'public/js')
    // .js('resources/template/lib/jquery/jquery.js', 'public/js/lib')
    // .js('resources/template/lib/popper.js/popper.js', 'public/js/lib')
    // .js('resources/template/lib/bootstrap/bootstrap.js', 'public/js/lib')
    // .js('resources/template/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js', 'public/js/lib')
    // .js('resources/template/lib/moment/moment.js', 'public/js/lib')
    // .js('resources/template/lib/d3/d3.js', 'public/js/lib')
    // .js('resources/template/lib/rickshaw/rickshaw.js', 'public/js/lib')
    //.js('http://maps.google.com/maps/api/js?key=AIzaSyAEt_DBLTknLexNbTVwbXyq2HSf2UbRBU8', 'public/js/lib')
    // .js('resources/template/lib/gmaps/gmaps.js', 'public/js/lib')
    // .js('resources/template/lib/chart.js/Chart.js', 'public/js/lib')
    // .styles([
    //     'resources/template/css/katniss.css',
    //     'resources/template/lib/font-awesome/css/font-awesome.css',
    //     'resources/template/lib/Ionicons/css/ionicons.css',
    //     'resources/template/lib/perfect-scrollbar/css/perfect-scrollbar.css',
    //     'resources/template/lib/rickshaw/rickshaw.css',
    // ], 'public/css/katniss.css');
    // .copy('resources/template/css/katnis.css', 'public/css');

if (mix.inProduction()){
    mix.version();
    // mix.disableNotifications();
}