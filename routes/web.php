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

Route::get('/', 'PageController@index')->name('home');
Route::get('/terms', 'PageController@terms')->name('terms');
Route::get('/mall/{slug}', 'PageController@mall')->name('mall');
Route::get('/category/{slug}', 'PageController@category')->name('category');
Route::get('/category', 'PageController@categories')->name('categories');
Route::get('/promo/{slug}', 'PageController@detail')->name('promo');

Route::get('/ig', 'InstagramController@redirectToProvider');
Route::get('/ig/callback', 'InstagramController@handleProviderCallback');
Route::get('/ig/hashtag', 'InstagramController@hashtag');

Route::namespace ('Backend')->prefix('backend')->group(function () {
    Route::resource('category', 'CategoryController');
    Route::resource('raw', 'RawController');
    Route::resource('post', 'PostController');
    Route::resource('mall', 'MallController');
});
