<?php

class AgentsController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('ajax', array('on' => array('destroy')));
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
	public function index()
	{
		View::share('title', 'ThinkClosing - Agents');
		if ( !Auth::user()->isAdmin() && Auth::user()->role >= 2) {
			$agents = User::where('parent', '=', Auth::user()->id)
				->paginate(10);
		} else if (Auth::user()->isAdmin()) {
			$agents = User::where('id', '>', 0)->paginate(10);
		}
		return View::make('agents.index', array('agents' => $agents));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make( 'agents/create' );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$agent = User::find($id);
		View::share('title', 'ThinkClosing - '.$agent->firstname.' '.$agent->lastname);
		return View::make( 'agents/show' )->with('agent', $agent);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make( 'agents/edit' );
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// TODO: first check if user's ID matches & they are admin
		$agent = Agent::find($id);
		if (Auth::user()->id !== $agent->user_id && !Auth::user()->isAdmin()) {
			Session::flash('alert-class', 'alert-error');
			Session::flash('flash_content', 'You are not the agent owner.');
			return Response::json(['success' => false]);
		}

		if ($agent->delete()){
			Session::flash('alert-class', 'alert-info');
			Session::flash('flash_content', 'Agent deleted.');
			return Response::json(['success' => true]);
		} else {
			Session::flash('alert-class', 'alert-error');
			Session::flash('flash_content', 'Agent not deleted.');
			return Response::json(['success' => false]);
		}
	}

}
