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
HTML::macro('nav_link', function($url, $text) {
    $class = ( Request::is($url) || Request::is($url.'/*') ) ? ' class="active"' : '';
    return '<li'.$class.'><a href="'.URL::to($url).'">'.$text.'</a></li>';
});

Route::get('/', function()
{
	return View::make('homepage');
});

Route::get('business-broadband', function() {
	return View::make('category', array('name' => 'business broadband'));
});

Route::get('broadband', function() {
	return View::make('category', array('name' => 'broadband'));
});

Route::get('phone-and-broadband', function() {
	return View::make('category', array('name' => 'phone & broadband'));
});

Route::get('TV-and-broadband', function() {
	return View::make('category', array('name' => 'TV & broadband'));
});

Route::get('mobile-phone', function() {
	return View::make('category', array('name' => 'Mobile phone deals'));
});

Route::get('subscribe', 'HomeController@subscribe');

Route::get('article', function() {
	return 'this is /article where the blog should live';
});

Route::get('controller-test', 'HomeController@controllerTest');

Route::get('broadband/product', function() {
	return View::make('product');
});