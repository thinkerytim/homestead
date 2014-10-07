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

Route::get('/', array('as' => 'home', function()
{
	return View::make('pages.home');
}));

/* Users controller routes */
Route::controller('users', 'UsersController');

/* Contracts controller routes */
Route::resource('closing', 'ClosingsController');

/* Tasks controller routes */
Route::resource('task', 'TasksController');