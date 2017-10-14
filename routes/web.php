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

Route::get('/', 'PageController@index');
Route::get('/category', 'PageController@category');
Route::get('/mall', 'PageController@mall');
Route::get('/detail', 'PageController@detail');

Route::namespace ('Backend')->prefix('backend')->group(function () {
    Route::resource('category', 'CategoryController');
    Route::resource('raw', 'RawController');
    Route::resource('post', 'PostController');
    Route::resource('mall', 'MallController');
});
