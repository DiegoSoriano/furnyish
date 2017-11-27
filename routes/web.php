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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/tiendas', 'HomeController@tiendas')->name('tiendas');
Route::get('/quienes-somos', 'HomeController@quienes_somos');
Route::get('/accion-furnyish', 'HomeController@accion');

Route::get('/products', 'ProductsController@index');
Route::get('/products/{mueble}', 'ProductsController@show');

Route::get('/show', 'CartController@show')->name('shoppingCart');
Route::get('/cart/{cart}/add', 'CartController@addToCart')->name('add-to-cart');
Route::get('/cart/{cart}/remove_one', 'CartController@removeOne')->name('remove-one');
Route::get('/cart/{cart}/remove_all', 'CartController@removeAll')->name('remove-all');
Route::get('/checkout', 'CartController@getCheckout')->name('checkout');
Route::post('/checkout', 'CartController@postCheckout')->name('checkout');

Route::get('/account', 'ProfileController@index')->name('profile');


Auth::routes();


