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

Route::get('/','Home\HomeController@index' );
Route::get('/about','Home\HomeController@about' );
Route::get('/contact','Home\HomeController@contact' );


Route::get('/admin','Admin\AdminController@index' );

Route::get('/blog','Blog\BlogController@index' );

Route::get('/store','Store\StoreController@index' );

Route::get('/coaching','Coaching\CoachController@index' );




