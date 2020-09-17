<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//tu-p3.html

//Route::get('/{slug}-p{id:[0-9]+}.html', ['as' => 'product', 'uses' => 'ProductController@index']);
//Route::get('den-led-p1.html',function ()
//{
//    return 123;
//});
Route::get('search','Client\HomeController@search')->name('canhan');
Route::get('canhan','Client\HomeController@canhan')->name('canhan')->middleware('checkUser');
Route::get('return','Client\OrderController@isSuccess')->name('return');
Route::post('xacnhan','Client\OrderController@thanhtoan')->middleware('checkUser');
Route::get('giaodich','Client\OrderController@viewxacnhan')->middleware('checkUser');
Route::prefix('cart')->group(function(){
    Route::get('/','Client\OrderController@viewCart')->middleware('checkUser');
});
Route::prefix('san-pham')->group(function () {
//    Route::get('/','SanPham_KhachHangController@index')->name('SanPham');
//    Route::get('chi-tiet-san-pham','SanPham_KhachHangController@getChitietSanpham')->name('ChiTietSanPhamUser');
    Route::prefix('danhgiasao-binhluan')->group(function (){
        Route::post('/','Client\ProductController@star')->name('ratingstar');
    });
});
Route::get('logout', 'Admin\Auth\LoginController@logout')->name('logout');
Route::get('/register','Client\HomeController@register')->name('DangKy');
Route::post('/accessregister','Client\HomeController@accessregister');
Route::get('/login','Client\HomeController@login')->name('user.login');
Route::post('/accesslogin', 'Admin\Auth\LoginController@login')->name('login');
Route::get('/products/{name}-p{id}.html','Client\ProductController@index');
//Route::get('/{si}-p{id:[0-9]+}.html', function(){
//    return 3;
//});
Route::get('/', 'Client\HomeController@index')->name('home');
Route::get('/{slug}','Client\CategoryController@index');
Route::group(['prefix' => 'ajax'], function () use ($router) {
//    $router->post('filterproduct', 'HomeController@filterProductwithCategory');
//    $router->post('filterproduct', function (){return 123;});
    $router->post('getproduct', 'Client\CategoryController@filterProductwithCategory');
    Route::post('orderby','Client\ProductController@filterProduct');
    Route::post('addCart','Client\OrderController@addCart')->middleware('checkUser');
    Route::post('deleteproduct','Client\OrderController@deleteCart')->middleware('checkUser');

});


