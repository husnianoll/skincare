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
    return view('welcome');
});

Route::resource('admin','IndexController');
Route::get('item', 'IndexController@index');
Route::get('/create','IndexController@create');
Route::post('/store','IndexController@store')->name('post.store');
Route::get('/search','IndexController@cari')->name('post.cari');
//Route::get('edit/coba/{id_item}','IndexController@edit');
//Route::post('update/{id_item}','IndexController@update');


Route::resource('category','CategoryController');
Route::get('/cat','CategoryController@index');
Route::get('/createcat', 'CategoryController@create');
Route::post('storecat','CategoryController@store')->name('post.storecat');



