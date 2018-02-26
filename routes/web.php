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

Route::get('/', 'StoreController@showProducts')->name('products');
Route::get('/login', 'StoreController@showLoginForm')->name('user.login');
Route::get('/register', 'StoreController@showRegistrationForm')->name('user.register');
Route::get('/category/{category}', 'StoreController@filterCategory');

Route::get('/product/{product}', 'ProductController@showProduct');

Route::get('/vue', 'StoreController@getProducts');
Route::get('/category/{category}/vue', 'StoreController@getProductsByCategory');
