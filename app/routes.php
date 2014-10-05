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
Route::get('register', ['as' => 'user.register', 'members' => 'UserController@register']);
Route::post('register', ['as' => 'user.register', 'members' => 'UserController@register']);
Route::get('login', ['as' => 'user.login', 'members' => 'UserController@login']);
Route::post('signin', ['as' => 'user.signin', 'members' => 'UserController@signin']);
Route::resource('Members','UserController');
Route::resource('profile','ProfileController');