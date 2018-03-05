<?php

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

Route::get('/', function () {
    return redirect('/products');
});

Route::get('/products', 'ProductController@showProducts')->name('products.show');
Route::get('/products/category/{category}', 'ProductController@showProductsByCategory')->name('products.category');
Route::get('/product/{product}', 'ProductController@showProduct')->name('product.show');

Route::get('/products/vue', 'ProductController@getProducts')->name('products.show.vue')->middleware('verify.vue');
Route::get('/products/category/{category}/vue', 'ProductController@getProductsByCategory')->name('products.category.vue')->middleware('verify.vue');;

Auth::routes();

Route::get('/profile', 'ProfileController@show')->name('profile');

Route::prefix('admin')->group(function (){
    Route::get('/', 'AdminController@show')->name('admin');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.post');
});

Route::post('/feedback', 'FeedbackController@sendFeedback')->name('feedback');
