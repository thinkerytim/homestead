<?php

class TasksController extends \BaseController {

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
		View::share('title', 'ThinkClosing - Tasks');
		if ( !Auth::user()->isAdmin() ) {
			$tasks = Task::where('user_id', '=', Auth::user()->id)
				->paginate(10);
		} else {
			$tasks = Task::where('id', '>', 0)->paginate(10);
		}
		return View::make('tasks.index', array('tasks' => $tasks));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make( 'tasks/new' );
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
		View::share('title', 'ThinkClosing - Task');
		$task = Task::find($id);
		return View::make('tasks.show')->with('task', $task);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
		// first check if user's ID matches & they are admin
		return $id;
	}


}
