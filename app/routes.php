<?php

Route::get('/', array('as' => 'home', function()
{
	return View::make('pages.home');
}));

Route::get('terms', array('as' => 'tos', function()
{
	return View::make('pages.tos');
}));

/* Admin controller routes */
Route::resource('admin', 'AdminController');

/* Users controller routes */
Route::controller('users', 'UsersController');

/* Closings controller routes */
Route::resource('closings', 'ClosingsController');

/* Tasks controller routes */
Route::resource('task', 'TasksController');

/* Password controller routes */
Route::controller('password', 'RemindersController');

/* Unlink Task from Closing */
Route::delete('closingtask', 'ClosingsController@unlinkTask');