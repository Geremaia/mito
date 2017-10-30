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

Route::get('/user', 'UserController@show');
Route::post('login', 'app\AuthenticateController@authenticate');
Route::post('register', 'app\AuthenticateController@register');

Route::group(['middleware' => 'auth:api'], function () {
    
    // Authentication Routes...
    Route::get('logout', 'API\AuthenticateController@logout');
    
    Route::get('/test', function () {
        echo 'ok success';
    });
});