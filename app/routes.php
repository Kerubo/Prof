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
Route::get('register', ['as' => 'members.register', 'uses' => 'MembersController@register']);
Route::post('register', ['as' => 'Members.register', 'uses' => 'MembersController@register']);
Route::get('login', ['as' => 'members.login', 'uses' => 'Membersontroller@login']);
Route::post('signup', ['as' => 'members.signup', 'uses' => 'MembersController@signup']);
Route::resource('members','MembersController');
Route::resource('profile','ProfileController');