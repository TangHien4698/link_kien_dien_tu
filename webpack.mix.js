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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/common.js', 'public/js');
mix.js('resources/js/ajaxSetup-header.js', 'public/js');
mix.js('resources/js/form-datatable.js', 'public/js');
mix.js('resources/js/createProduct.js', 'public/js');
mix.js('resources/js/editProduct.js', 'public/js');
mix.js('resources/js/deleteProduct.js', 'public/js');

mix.js('resources/js/feedback.js', 'public/js');

//category
mix.js('resources/js/category.js', 'public/js');

//order
mix.js('resources/js/order.js', 'public/js');

//blog
mix.js('resources/js/blog.js', 'public/js');

//user
mix.js('resources/js/deleteUser.js', 'public/js');
mix.styles('resources/sass/product.css', 'public/css/product.css');
mix.styles('resources/sass/admin.css', 'public/css/admin.css');
//order
mix.styles('resources/sass/order.css', 'public/css/order.css');
