<?php

class UsersController extends \BaseController {
	public function __construct()
	{
		$this->beforeFilter('auth', array('only'=>array('getDashboard','putUpdate', 'getIndex', 'getShow')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		View::share('title', 'ThinkClosing');
		return 'index';
	}

	public function getShow($id)
	{
		$user = User::find($id);
		if (!$user) {
			Session::flash('alert-class', 'alert-error');
			Session::flash('flash_content', 'User not found.');
			// make an empty user
			$user = array();
		}
		View::share('title', 'ThinkClosing - '.$user->firstname.' '.$user->lastname);
		return View::make('users.show')->with('user', $user);
	}

	public function getRegister()
	{
		View::share('title', 'ThinkClosing - Register');
		return View::make('users.register');
	}

	public function getLogin()
	{
		View::share('title', 'ThinkClosing - Login');
	    return View::make('users.login');
	}

	public function getDashboard()
	{
		View::share('title', 'ThinkClosing - Dashboard');
		return View::make('users.dashboard');
	}

	public function postCreate()
	{
		$validator = Validator::make(Input::all(), User::$signup_rules);
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

	public function putUpdate($id)
	{
		$rules = User::edit_rules(Auth::user()->id);
		$validator = Validator::make(Input::all(), $rules);
		$destinationPath = 'assets/images/profile';

	    if ($validator->passes()) {
	    	$user = User::find($id);
	    	// handle the image here
	    	if (Input::file('photo')){
	    		$file = Input::file('photo');
	    		$filename = str_random(12).'.'.$file->getClientOriginalExtension();
	    		$upload_success = Input::file('photo')->move($destinationPath, $filename);
				if( !$upload_success ) {
				   return Response::json('error', 400);
				} else {
					$user->photo = $filename;
				} 
	    	}
		    $user->firstname = Input::get('firstname');
		    $user->lastname = Input::get('lastname');
		    $user->email = Input::get('email');
		    $user->company = Input::get('company');
		    $user->address1 = Input::get('address1');
		    $user->address2 = Input::get('address2');
		    $user->city = Input::get('city');
		    $user->state = Input::get('state');
		    $user->zip = Input::get('zip');
		    $user->website = Input::get('website');
		    $user->facebook = Input::get('facebook');
		    $user->twitter = Input::get('twitter');
		    $user->pinterest = Input::get('pinterest');
		    $user->linkedin = Input::get('linkedin');
		    $user->bio = Input::get('bio');
		    $user->phone = Input::get('phone');
		    $user->mobile = Input::get('mobile');
		    $user->reminders = Input::get('reminders');

		    // are we resetting the password?
		    if (Input::get('current_password') && Input::get('new_password') && Input::get('confirm_password')){
		    	if ( !Hash::check(Input::get('current_password'), $user->password) ){
		    		return Redirect::to('admin/profile')
				    	->with('message', 'Incorrect password.')
				    	->withErrors($validator)
				    	->withInput();
		    	} else if ( Input::get('new_password') !== Input::get('confirm_password') ){
		    		return Redirect::to('admin/profile')
				    	->with('message', 'Passwords did not match.')
				    	->withErrors($validator)
				    	->withInput();
				} else {
					$user->password = Hash::make(Input::get('new_password'));
				}
		    }

		    $user->save();

		    if ($user) {
		    	return Redirect::to('admin/profile')
		    	->with('message', 'User updated.')
		    	->with('user', $user);
		    }
		    // fallback	
		    return Redirect::to('admin/profile')
		    	->with('message', 'User update failed.')
		    	->withErrors($validator)
		    	->withInput();
		} else {
		    // validation has failed, display error messages
		    //return Response::json(array('success' => false, 'message' => 'User update failed.'));
		    return Redirect::to('admin/profile')
		    	->with('message', 'The following errors occurred')
		    	->withErrors($validator)
		    	->withInput();
		}
	}	

	public function postSignin()
	{
		// check for remember me
		$remember = Input::get('remember') ? true : false;

		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')), $remember)) {
			if (Auth::user()->isAdmin())
			{
		    	return Redirect::to('admin')->with('message', 'You are now logged in, admin!');
		    } else {
		    	return Redirect::to('admin')->with('message', 'You are now logged in!');
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
}
