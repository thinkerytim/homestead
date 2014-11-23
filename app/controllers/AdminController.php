<?php

class AdminController extends BaseController {
	public function __construct()
    {
        $this->beforeFilter('auth');
        $this->beforeFilter(function()
        {
        	if(!Auth::check())
			{
				return Redirect::to('users/login')
		        ->with('message', 'Please login!');
			}
            if ( ! Auth::user()->isAdmin()) 
            {
				return Redirect::to('/')
		        ->with('message', 'You must be an admin to access this area!');
			}
        });
    }

 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = DB::table('users')->paginate(15);
		return View::make('admin.index')->with('users', $users);
	}


}
