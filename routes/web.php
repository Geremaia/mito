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

Route::resource('categories', 'CategoryController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products', 'ProductController@index')->name('index');
Route::get('/admin/products/new', 'ProductController@new')->name('new');
Route::get('/admin/products/newcategory', 'ProductController@newcategory')->name('newcategory');
Route::post('/admin/products/create', 'ProductController@create')->name('create');
Route::post('/admin/products/store', 'ProductController@store')->name('store');
Route::get('/admin/products/store', 'ProductController@store')->name('store');
Route::get('/admin/products/create', 'ProductController@create')->name('create');
Route::post('/admin/products/createcategory', 'ProductController@createcategory')->name('createcategory');
Route::get('/admin/products/show', 'ProductController@show')->name('show');
Route::post('/admin/products/show', 'ProductController@show')->name('show');

Route::get('/admin/categories', 'CategoryController@index')->name('index');
Route::get('/admin/categories/new', 'CategoryController@new')->name('new');
Route::get('/admin/categories/newcategory', 'CategoryController@newcategory')->name('newcategory');
Route::post('/admin/categories/create', 'CategoryController@create')->name('create');
Route::post('/admin/categories/store', 'CategoryController@store')->name('store');
Route::get('/admin/categories/store', 'CategoryController@store')->name('store');
Route::get('/admin/categories/create', 'CategoryController@create')->name('create');
Route::post('/admin/categories/createcategory', 'CategoryController@createcategory')->name('createcategory');
Route::get('/admin/categories/show', 'CategoryController@show')->name('show');
Route::post('/admin/categories/show', 'CategoryController@show')->name('show');