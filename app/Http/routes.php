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


Route::get('/', 'SharesController@discover');

Route::get('/activity', 'SharesController@activity');
Route::get('/discover', 'SharesController@discover');
Route::get('/add', 'SharesController@add');
Route::post('/newFile', 'SharesController@newFile');

Route::get('/edit/{share}', 'SharesController@edit');
Route::post('/edit/{share}', 'SharesController@update');
Route::post('/delete/{share}', 'SharesController@delete');

// Route::get('/upload', 'SharesController@upload');

Route::get('/login', 'UsersController@login');
Route::get('/settings', 'UsersController@settings');
Route::get('/profile', 'UsersController@profile');
Route::get('/profile/{user}', 'UsersController@userP');



Route::get('/home', 'HomeController@index');
Route::auth();