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

use App\brand;
use App\Category;

Route::get('/', 'ShopController@main')->name('main');

Route::get('/shop','ShopController@index')->name('shop');

Route::get('/shop/{gender}', 'ShopController@gender')->name('shop.gender');

Route::get('/shop/{gender}/{category}', 'ShopController@genderCategory')->name('shop.genderCategory');

Route::get('/shop/{gender}/{category}/{subcategory}', 'ShopController@genderCategorySubcategory')->name('shop.genderCategorySubcategory');

Route::get('/product/{gender}/{item}/{id}', 'ShopController@item')->name('product');

Route::post('/addCart', 'ShopController@store')->name('shop.addCart');

Route::get('/cart', 'ShopController@cart')->name('shop.cart');

Route::get('/remove/{id}', 'ShopController@remove')->name('shop.remove');

Route::post('/update', 'ShopController@update')->name('shop.update');

Route::get('/search', 'ShopController@search')->name('shop.search');

Route::get('/searching', 'ShopController@searching')->name('shop.searching');
Route::get('/searching1', 'ShopController@searching1')->name('shop.searching1');