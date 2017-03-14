<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|


Route::get('/', function () {
    return view('welcome');
});*/
Route::resource('cart','CartController');
Route::resource('books','BookController');
Route::resource('cards','CardsController');
Route::resource('checkout','CheckoutController');
Route::resource('orders','OrderController');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'BookController@index');
Route::get('/cart', 'CartController@index')->middleware('auth');
Route::get('/cards', 'CardsController@index')->middleware('auth');
Route::post('/cards', 'CardsController@store')->middleware('auth');
Route::post('/checkout', 'CheckoutController@checkout')->middleware('auth');
