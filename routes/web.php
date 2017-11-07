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

Auth::routes();

Route::resource('products', 'ProductController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products', 'ProductController@index')->name('index');
Route::get('/admin/products/new', 'ProductController@new')->name('new');

Route::post('/admin/products/create', 'ProductController@create')->name('create');
Route::get('/admin/products/create', 'ProductController@create')->name('create');

Route::post('/admin/products/store', 'ProductController@store')->name('store');
Route::get('/admin/products/store', 'ProductController@store')->name('store');


Route::get('/admin/products/edit', 'ProductController@edit')->name('edit');
Route::post('/admin/products/editconfirm', 'ProductController@editconfirm')->name('editconfirm');
Route::get('/admin/products/editconfirm', 'ProductController@editconfirm')->name('editconfirm');


Route::get('/admin/products/delete', 'ProductController@delete')->name('delete');
Route::post('/admin/products/deleteconfirm', 'ProductController@deleteconfirm')->name('deleteconfirm');
Route::get('/admin/products/deleteconfirm', 'ProductController@deleteconfirm')->name('deleteconfirm');

Route::get('admin/edit', 'ProductController@edit');