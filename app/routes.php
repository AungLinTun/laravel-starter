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

Route::get('/', [
	'as'     => 'homepage',
	'before' => 'cache',
	'after'  => 'cache',
	'uses'   => 'HomeController@index'
]);

// ...

// Admin routes
Route::group(['prefix' => 'admin'], function () {

	// Protected routes
	Route::group(['before' => 'auth'], function () {
		Route::get('/', [
			'as'   => 'admin.homepage',
			'uses' => 'HomeController@index'
		]);

		// Protected routes
		// ...
		
	});

	Route::resource('sessions', 'Admin\SessionsController', [
		'only' => ['create', 'store', 'destroy']
	]);

	Route::get('sessions/destroy', [
		'as'   => 'sessions.destroy',
		'uses' => 'SessionsController@destroy'
	]);

});