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

Route::get('/', 'HomeController@get_index');
Route::model('users', 'User');

Route::get('login', 'UserController@get_index');

Route::get('register', 'UserController@get_register');

Route::post('login', 'UserController@post_index');
Route::post('register', 'UserController@post_register');

Route::get('profile', 'UserController@get_profile');
Route::get('logout', 'UserController@logout');

Route::get('/help', function()
{
	$title= "رهنما";
	return View::make('home.help')
			->with('title', $title);
});

Route::get('/contact', function()
{
	$title= "تماس با ما";
	return View::make('home.contact')
			->with('title', $title);
});



HTML::macro('clever_link', function($route, $text) {
	if( Request::path() == $route ) {
		$active = "class = 'active'";
	}
	else {
		$active = '';
	}

  return '<li ' . $active . '>' . link_to($route, $text) . '</li>';
});
