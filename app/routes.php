<?php



Route::get('/', function()
{
	return View::make('layouts.master');
});
Route::get('register', ['as' => 'members.register', 'members' => 'UserController@register']);
Route::post('register', ['as' => 'members.register', 'members' => 'UserController@register']);
Route::get('login', ['as' => 'members.login', 'members' => 'UserController@login']);
Route::post('login', ['as' => 'members.login', 'members' => 'UserController@login']);

Route::post('signup', ['as' => 'members.signup', 'members' => 'UserController@signup']);
Route::resource('members','MembersController');
Route::resource('profile','ProfileController');