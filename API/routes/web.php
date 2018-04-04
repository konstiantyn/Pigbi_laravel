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

Route::get('/', 'SiteController@index');
Route::get('/index', 'SiteController@index');
Route::get('/application', 'SiteController@application');
Route::get('/test', 'EstateController@test');
Route::get('/test2', 'EstateController@test2');

// Route::get('/saved', 'SiteController@saved');
// Route::get('/', 'SiteController@approved');
