<?php

Route::get('/', array('as' => 'home', function()
{
	return View::make('pages.home');
}));

/* Admin controller routes */
Route::resource('admin', 'AdminController');

/* Users controller routes */
Route::controller('users', 'UsersController');

/* Closings controller routes */
Route::resource('closings', 'ClosingsController');

/* Tasks controller routes */
Route::resource('task', 'TasksController');
