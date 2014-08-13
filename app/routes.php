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
	return View::make('homepage');
});

Route::get('business', function() {
	return View::make('business');
});

Route::get('broadband', function() {
	return 'this is /broadband';
});

Route::get('phone-and-broadband', function() {
	return 'this is /phone-and-broadband';
});

Route::get('TV-and-broadband', function() {
	return 'this is /TV-and-broadband';
});

Route::get('mobile-phone', function() {
	return 'this is /mobile-phone';
});

Route::get('article', function() {
	return 'this is /article where the blog should live';
});

Route::get('controller-test', 'HomeController@controllerTest');