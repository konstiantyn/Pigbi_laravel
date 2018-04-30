<?php

Route::get('/', 'SiteController@index');
Route::get('url_homepage', 'SiteController@index');
Route::get('/index', 'SiteController@index');
Route::get('/application', 'SiteController@application');
Route::get('/test', 'EstateController@test');
Route::get('/test2', 'EstateController@test2');
Route::post('/search', 'SiteController@search');
Route::get("/autocomplete",array('as'=>'autocomplete','uses'=> 'SiteController@autocomplete'));
Route::get("/detail", "SiteController@detail");
Route::get("/lohi_sort", "SiteController@increasesort");
Route::get("/hilo_sort", "SiteController@decreasesort");
Route::get("/newest", "SiteController@newestsort");

// Filters URLs for the Price sort
Route::get('ten_thirty', 'SiteController@ten_thirty');
Route::get('url_thirty_firty', 'SiteController@thirty_firty');
Route::get('url_forty_sixty', 'SiteController@forty_sixty');
Route::get('url_sixty_hundred', 'SiteController@sixty_hundred');
Route::get('url_hundred_twentyhun', 'SiteController@hundred_twentyhun');
// End

// Filter URLs for the Bed sort
Route::get('url_onetwobed', 'SiteController@Onetwofunc');
Route::get('url_twofourbed', 'SiteController@Twofourfunc');
Route::get('url_foursixbed', 'SiteController@Foursixfunc');
// End

//Route for the Autho
Route::get('url_signin', function(){  return view('signin'); });
Route::get('url_signup', function(){ return view('signup'); });
//End
// Route::get('/saved', 'SiteController@saved');
// Route::get('/', 'SiteController@approved');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('url_signup', 'Auth\RegisterController@create');
Route::post('url_signin', 'Auth\LoginController@Signinfunc');
