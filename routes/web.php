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



Auth::routes();

Route::get('/product/{product}/edit' , 'ProductsController@edit');
Route::get('/product/{product}', 'ProductsController@show');
Route::post('/order', 'OrderController@store');
Route::post('/delete', 'BasketController@store');

Route::get('/', 'HomeController@index');
Route::get('/products', 'ProductsController@index');
Route::get('/basket', 'BasketController@index');
Route::get('/home', 'HomeController@index')->name('home');
