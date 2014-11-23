<?php

class UsersController extends \BaseController {
	public function __construct()
	{
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return 'index';
	}

	public function getRegister()
	{
		return View::make('users.register');
	}

	public function getLogin()
	{
	    return View::make('users.login');
	}

	public function getDashboard()
	{
		return View::make('users.dashboard');
	}

	public function postCreate()
	{
		$validator = Validator::make(Input::all(), User::$rules);
	    if ($validator->passes()) {
	        $user = new User;
		    $user->firstname = Input::get('firstname');
		    $user->lastname = Input::get('lastname');
		    $user->email = Input::get('email');
		    $user->company = Input::get('company');
		    $user->phone = Input::get('phone');
		    $user->password = Hash::make(Input::get('password'));
		    $user->save();

		    if ($user) {
		    	Auth::login($user);
		    	return Redirect::to('users/dashboard')->with('message', 'Thanks for registering!');
		    }
		    // fallback	
		    return Redirect::to('users/login')->with('message', 'Thanks for registering!');
		} else {
		    // validation has failed, display error messages
		    return Redirect::to('users/register')
		    	->with('message', 'The following errors occurred')
		    	->withErrors($validator)
		    	->withInput();
		}
	}

	public function postSignin()
	{
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			if (Auth::user()->isAdmin())
			{
		    	return Redirect::to('admin')->with('message', 'You are now logged in, King Admin!');
		    } else {
		    	return Redirect::to('users/dashboard')->with('message', 'You are now logged in!');
		    }
		} else {
		    return Redirect::to('users/login')
		        ->with('message', 'Your username/password combination was incorrect')
		        ->withInput(Input::except('password', 'password_confirm'));
		}
	}

	public function getLogout()
	{
		Auth::logout();
    	return Redirect::to('users/login')->with('message', 'Your are now logged out!');
	}

	public function getReminder()
	{
		return View::make('password.remind');
	}

	public function getProfile()
	{
		return View::make('shared.profile');
	}
}
