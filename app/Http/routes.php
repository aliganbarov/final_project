<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/






// Route::get('/home', 'HomeController@index');

Route::get('/login', 'UsersController@login');

Route::get('/', 'SharesController@discover');
Route::get('/discover', 'SharesController@discover');
Route::auth();
Route::group(['middleware' => 'auth'],function(){

Route::get('/activity', 'SharesController@activity');
Route::get('/add', 'SharesController@add');
Route::post('/newFile', 'SharesController@newFile');
Route::get('/edit/{share}', 'SharesController@edit');
Route::post('/edit/{share}', 'SharesController@update');
Route::get('/delete/{share}', 'SharesController@delete');
Route::post('/delete/{share}', 'SharesController@delete');
Route::get('/settings', 'UsersController@settings');
Route::get('/profile', 'UsersController@profile');
Route::get('/profile/{user}', 'UsersController@userP');
Route::get('/edit/{share}', 'SharesController@edit');
Route::post('/like', 'SharesController@like');	
Route::post('/follow', 'SharesController@follow');	


});