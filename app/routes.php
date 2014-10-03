<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('layouts.master');
});
Route::get('register', ['as' => 'user.register', 'users' => 'UserController@register']);
Route::post('register', ['as' => 'user.register', 'users' => 'UserController@register']);
Route::get('login', ['as' => 'user.login', 'users' => 'UserController@login']);
Route::post('login', ['as' => 'user.login', 'users' => 'UserController@login']);
Route::post('signin', ['as' => 'user.signin', 'users' => 'UserController@signin']);
Route::resource('user','UserController');
Route::resource('profile','ProfileController');