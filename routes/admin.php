<?php

Route::group(
    ['middleware' => 'web',
        'prefix' => 'admin',
        'namespace' => 'Admin'],
    function () {
        //login
        Route::get('/login', 'Auth\LoginController@index')->name('login.index');

        Route::post('/login', 'Auth\LoginController@login')->name('admin.login');

        Route::get('/logout', 'Auth\LoginController@logout')->name('admin.logout');
    }
);
//call admin page
Route::group(
    ['middleware' => ['web', 'checkAdmin'],
        'prefix' => 'admin',
        'namespace' => 'Admin'],
    function () {
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::get('/listAdmin', 'AdminController@show')->name('admin.show');
        Route::get('change-pass', 'AdminController@changePass')->name('admin.changePass');
        Route::post('/update/{id}', 'AdminController@updatePass')->name('admin.updatePass');

        //products
        Route::resource('products','ProductController',['as' => 'admin']);
        Route::post('products', 'ProductController@delete')->name('admin.products.delete');
        Route::post('products/create', 'ProductController@store')->name('admin.products.store')->middleware(['web', 'checkAdmin']);

        //category
        Route::get('categories', 'CategoryController@index')->name('admin.categories.index');
        Route::post('categories/create', 'CategoryController@store')->name('admin.categories.store');
        Route::post('categories/update', 'CategoryController@update')->name('admin.categories.update');
        Route::post('categories/delete', 'CategoryController@delete')->name('admin.categories.delete');

        // user
        Route::get('users', 'UserController@index')->name('admin.users.index');
        Route::post('users', 'UserController@delete')->name('admin.users.delete');

        //feedback
        Route::get('feedbacks', 'FeedbackController@index')->name('admin.feedbacks.index');
        Route::post('feedbacks', 'FeedbackController@delete')->name('admin.feedbacks.delete');

        //order
        Route::get('orders', 'OrderController@index')->name('admin.orders.index');
        Route::post('orders', 'OrderController@delete')->name('admin.orders.delete');
        Route::get('orders/detail/{id}', 'OrderController@show')->name('admin.orders.show');
        Route::post('order/changState', 'OrderController@changeState')->name('admin.orders.changeState');

        //blog
        Route::resource('blogs', 'BlogController', ['as'=> 'admin']);
        Route::post('blogs/delete', 'BlogController@delete')->name('admin.blogs.delete');
    }
);
