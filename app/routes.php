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
	$title= "صفحه اصلی";
	return View::make('home.index')
			->with('title', $title);
});

Route::get('/user', function()
{
	$text= "User Profile";
	return View::make('users.profile')
			->with('title', $text);
});
