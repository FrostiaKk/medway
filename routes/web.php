<?php

use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
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


Route::redirect('/', 'en');

Route::group(['prefix' => '{lang}'], function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/products', 'ProductsController@index')->name('products');
    Route::get('/basket', 'BasketController@index')->name('basket');

    Route::get('/product/{product}/edit' , 'ProductsController@edit')->name('product.edit');
    Route::get('/product/{product}', 'ProductsController@show')->name('product');
    Route::post('/order', 'OrderController@store')->name('order');
    Route::post('/delete', 'BasketController@store')->name('delete');

    Auth::routes();
});


