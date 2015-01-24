<?php

class UsersController extends \BaseController {
	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
		$this->beforeFilter('auth', array('only'=>array('getDashboard','putUpdate')));
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
		$validator = Validator::make(Input::all(), User::$rules);

$icon = Input::file('image');
$destinationPath = 'assets/images/profile';
// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
$filename = str_random(12);
//$filename = $file->getClientOriginalName();
//$extension =$file->getClientOriginalExtension(); 
$upload_success = Input::file('file')->move($destinationPath, $filename);

if( $upload_success ) {
   return Response::json('success', 200);
} else {
   return Response::json('error', 400);
}


	    if ($validator->passes()) {
	        $user = User::find($id);
		    $user->firstname = Input::get('firstname');
		    $user->lastname = Input::get('lastname');
		    $user->email = Input::get('email');
		    $user->company = Input::get('company');
		    $user->phone = Input::get('phone');
		    $user->save();

		    if ($user) {
		    	return Response::json(array('success' => true, 'message' => 'User updated.'));
		    }
		    // fallback	
		    return Response::json(array('success' => false, 'message' => 'User update failed.'));
		} else {
		    // validation has failed, display error messages
		    //return Response::json(array('success' => false, 'message' => 'User update failed.'));
dd($validator);
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
		    	return Redirect::to('admin')->with('message', 'You are now logged in, King Admin!');
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
