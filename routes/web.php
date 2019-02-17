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

Route::prefix('admin')->group(function(){
    Route::get('/','AdminController@index');
    Route::post('/','AdminController@checkAdmin');
    Route::get('/home','AdminController@home');
    Route::get('/logout','AdminController@logout');
    Route::get('/addadmin','AdminController@addAdmin');
    Route::post('/addadmin','AdminController@storeAdmin');
    Route::get('/adminlist','AdminController@adminList');
});