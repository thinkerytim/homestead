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
        });
    }

 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		View::share('title', 'ThinkClosing - Dashboard');
		return View::make('admin.index');
	}

	public function getProfile()
	{
		View::share('title', 'ThinkClosing - Profile');
		if ( !Auth::user()->isAdmin() ) {
			$closings = Closing::where('agent_id', '=', Auth::user()->id)
				->orWhere('agent_id', '=', Auth::user()->parent)
				->paginate(10);
		} else {
			$closings = Closing::where('id', '>', 0)->paginate(10);
		}
		return View::make('shared.profile')->with('closings', $closings);
	}

}