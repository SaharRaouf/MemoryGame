var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

require('laravel-elixir-footer');

var paths = {
    'jquery': './vendor/bower_components/jquery/',
    'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/'
}

elixir(function(mix) {
    mix.sass('app.scss')
        .copy(
        'vendor/bower_components/jquery/dist/jquery.min.js',
        'public/js/vendor/jquery.js'
    )
        .copy(
        'vendor/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap.js',
        'public/js/vendor/bootstrap.js'
    )
        .copy(
        'vendor/bower_components/font-awesome/css/font-awesome.min.css',
        'public/css/vendor/font-awesome.css'
    )
        .copy(
        'vendor/bower_components/bourbon/dist',
        'resources/assets/sass/bourbon'
    );
    mix.footer('\n/** ABC Solutions - 2014 */\n');
});
//by default
// elixir(function(mix) {
    //mix.less('app.less');

//});
