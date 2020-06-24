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

Route::get('/', "ApiController@indexAction" );
Route::get('/news', "ApiController@newsAction" );
Route::get('/news1', "ApiController@news1Action" );
Route::get('/news2', "ApiController@news2Action" );
Route::get('/news3', "ApiController@news3Action" );
Route::get('/reger', "ApiController@regerAction" );
Route::get('/regernew', "ApiController@regernewAction" );


Route::get('/auth', "AuthController@auth" );
Route::get('/logout', "AuthController@logout" );
Route::get('/registration', "AuthController@registration" );
