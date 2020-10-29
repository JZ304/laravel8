<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\User'], function () {
    // 一对一  多对多
    Route::get('/user', 'UserController@getUserInfo');
    Route::get('/role', 'UserController@role');
    Route::get('/phone', 'UserController@getUserInfoByPhone');

    // 一对多
    Route::get('/post', 'UserController@post');
    Route::get('/comment', 'UserController@comment');

    // 远程多对多
    Route::get('/car/getMechanicOwners', 'userController@getMechanicOwners');
});

