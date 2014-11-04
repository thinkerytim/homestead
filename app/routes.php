<?php

Route::get('/', array('as' => 'home', function()
{
	$page_nav = User::getMenuSettings();
	return View::make('pages.home')->with('page_nav', $page_nav);
}));

/* Admin controller routes */
Route::resource('admin', 'AdminController');

/* Users controller routes */
Route::controller('users', 'UsersController');

/* Closings controller routes */
Route::resource('closings', 'ClosingsController');

/* Tasks controller routes */
Route::resource('task', 'TasksController');

/* Unlink Task from Closing */
Route::delete('closingtask', 'ClosingsController@unlinkTask');