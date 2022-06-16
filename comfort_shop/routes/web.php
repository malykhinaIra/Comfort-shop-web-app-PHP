<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::get('/', 'App\Http\Controllers\MainController@forLend');

Route::get('/Lend', 'App\Http\Controllers\MainController@forLend')->name('lend');

Route::get('/Catalog', 'App\Http\Controllers\MainController@forCatalog');

Route::get('/Catalog/{room}', 'App\Http\Controllers\MainController@forRoom');

Route::get('/Catalog/category/{category}', 'App\Http\Controllers\MainController@forCategory');

Route::get('/Info', 'App\Http\Controllers\MainController@forInfo');

Route::get('/User', 'App\Http\Controllers\MainController@forUser')->name('user');

Route::get('/search', 'App\Http\Controllers\MainController@search');

Route::get('/orders', ['uses' => 'App\Http\Controllers\OrderController@forOrders', 'as' => 'orders']);

Route::get('/basket', 'App\Http\Controllers\BasketController@forBaskets')->name('basket');

Route::get('/favourite', 'App\Http\Controllers\FavouritesController@favourite');

Route::get('/make_order', 'App\Http\Controllers\OrderController@makeOrder');

Route::get('/favourite/add/{item_id}', 'App\Http\Controllers\FavouritesController@addToFavourites');

Route::get('/favourite/remove/{item_id}', 'App\Http\Controllers\FavouritesController@removeFromFavourites');

Route::post('/myOrders', 'App\Http\Controllers\OrderController@order');

Route::post('/result', 'App\Http\Controllers\MainController@result');

Route::post('/check', 'App\Http\Controllers\MainController@check');

Route::get('/basket/add/{item_id}', 'App\Http\Controllers\BasketController@addToBasket');

Route::get('/basket/remove/{item_id}', 'App\Http\Controllers\BasketController@removeFromBasket');

Route::get('/basket/plus/{item_id}', 'App\Http\Controllers\BasketController@plus');

Route::get('/basket/minus/{item_id}', 'App\Http\Controllers\BasketController@minus');

Route::get('/Catalog/item/{id}', 'App\Http\Controllers\MainController@forItem');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', 'App\Http\Controllers\Auth\LogoutController@perform')->name('logout.perform');
 });

Route::get('/home', 'App\Http\Controllers\MainController@forLend');

Auth::routes();

