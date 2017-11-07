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

Route::get('/Admin/products', 'ProductController@index')->name('index');
Route::get('/admin/products/new', 'ProductController@new')->name('new');
Route::get('/admin/products/newcategory', 'ProductController@newcategory')->name('newcategory');
Route::post('/admin/products/create', 'ProductController@create')->name('create');
Route::post('/admin/products/store', 'ProductController@store')->name('store');
Route::get('/admin/products/store', 'ProductController@store')->name('store');
Route::get('/admin/products/create', 'ProductController@create')->name('create');
Route::post('/admin/products/createcategory', 'ProductController@createcategory')->name('createcategory');
Route::get('/admin/products/show', 'ProductController@show')->name('show');
Route::post('/admin/products/show', 'ProductController@show')->name('show');