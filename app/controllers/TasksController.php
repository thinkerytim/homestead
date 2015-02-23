<?php

class TasksController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('ajax', array('on' => array('destroy')));
        $this->beforeFilter('auth'); // defined in filters/filters.php
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
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Task::$rules);
		if ($validator->passes()) {
			$task = new Task;
			$task->name = Input::get('name');
			$task->description = Input::get('description');
			$task->user_id = Auth::user()->id;
			$task->save();

			if ($task) {
		    	return Redirect::to('tasks')->with('message', 'Task added.');
		    }
		    // fallback	
		    return Redirect::to('tasks')->with('message', 'Task added.');
		} else {
		    // validation has failed, display error messages
		    return Redirect::to('tasks')
		    	->with('message', 'The following errors occurred')
		    	->withErrors($validator)
		    	->withInput();
		}
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		View::share('title', 'ThinkClosing - Task');
		$task = Task::find($id);
		if (!$task) {
			return Redirect::route('tasks.index')
            	->with('message', 'Task not found.')
            	->with('alert-class', 'alert-error');
		} else if($task->user_id !== Auth::user()->id || !Auth::user()->isAdmin()) {
			return Redirect::route('tasks.index')
            	->with('message', "You don't have permission to edit this task.")
            	->with('alert-class', 'alert-error');
		}
		return View::make('tasks.edit')->with('task', $task);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	    $task = Task::find($id);
	    $task->user_id = Auth::user()->id;

	    if (!$task->update(Input::all())) {
	        return Redirect::back()
            	->with('message', 'Something wrong happened while saving your model')
                ->withInput();
	    }

	    return Redirect::route('tasks.index')
            ->with('message', 'Task updated.');
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
		$task = Task::find($id);
		if (Auth::user()->id !== $task->user_id && !Auth::user()->isAdmin()) {
			Session::flash('alert-class', 'alert-error');
			Session::flash('flash_content', 'You are not the task owner.');
			return Response::json(['success' => false]);
		}

		if ($task->delete()){
			Session::flash('alert-class', 'alert-info');
			Session::flash('flash_content', 'Task deleted.');
			return Response::json(['success' => true]);
		} else {
			Session::flash('alert-class', 'alert-error');
			Session::flash('flash_content', 'Task not deleted.');
			return Response::json(['success' => false]);
		}
	}


}
