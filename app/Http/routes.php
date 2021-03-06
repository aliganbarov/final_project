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
Route::get('/profile/{user}/editprofile', 'UsersController@edit_profile');
Route::post('/profile/updateprofile', 'UsersController@update_profile');
Route::get('/profile/{user}', 'UsersController@userP');
Route::get('/edit/{share}', 'SharesController@edit');
Route::post('/like', 'SharesController@like');	
Route::post('/follow', 'SharesController@follow');	


// ADMIN PANEL ROUTES
Route::get('/admin', 'AdminsController@index');
Route::get('/admin/sections', 'AdminsController@sections');

Route::get('/admin/users', 'AdminsController@users');
Route::get('/admin/users/delete/{user}', 'AdminsController@delete_user');
Route::get('/admin/users/edit/{user}', 'AdminsController@edit_user');
Route::get('/admin/users/edit/{user}', 'AdminsController@edit_user');
Route::post('/admin/users/edit/{user}', 'AdminsController@update_user');
Route::get('/admin/users/makeadmin/{user}', 'AdminsController@make_admin');

Route::get('/admin/{user}/shares', 'AdminsController@user_shares');

Route::get('/admin/shares', 'AdminsController@shares');
Route::get('/admin/shares/delete/{share}', 'AdminsController@delete_share');


});