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

/*
|--------------------------------------------------------------------------
| Store block
|--------------------------------------------------------------------------
|
| All routes for managing products
|
*/

Route::get('/products', 'ProductController@showProducts')->name('products.show');
Route::get('/products/category/{category}', 'ProductController@showProductsByCategory')->name('products.category');
Route::get('/product/{product}', 'ProductController@showProduct')->name('product.show');

Route::get('/products/vue', 'ProductController@getProducts')->name('products.show.vue')->middleware('verify.vue');
Route::get('/products/category/{category}/vue', 'ProductController@getProductsByCategory')->name('products.category.vue')->middleware('verify.vue');

/*
|--------------------------------------------------------------------------
| Authentication block
|--------------------------------------------------------------------------
|
| All routes for registration and authentication
|
*/

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->middleware('crypt.auth');
Route::get('/profile/logout', 'Auth\LoginController@userLogout')->name('user.logout');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::prefix('password')->group(function (){
    Route::get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/reset', 'Auth\ResetPasswordController@reset');
});

Route::prefix('admin')->group(function (){
    Route::get('/', 'AdminController@show')->name('admin');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->middleware('crypt.auth')->name('admin.login.post');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register')->middleware('crypt.auth');

/*
|--------------------------------------------------------------------------
| Other routes block
|--------------------------------------------------------------------------
|
| Etc.
|
*/

Route::get('/profile', 'ProfileController@show')->name('profile');

Route::get('/feedback/send', 'FeedbackController@sendFeedback')->name('feedback.send');
Route::post('/feedback/create', 'FeedbackController@createFeedback')->name('feedback.create');

Route::post('/rsa/pkey', 'RsaController@generateKeyPair');
