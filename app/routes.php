<?php

Route::get('/', array('as' => 'home', function()
{
	return View::make('pages.home');
}));

/* Users controller routes */
Route::controller('users', 'UsersController');

/* Contracts controller routes */
Route::resource('closings', 'ClosingsController');

/* Tasks controller routes */
//Route::resource('task', 'TasksController');
