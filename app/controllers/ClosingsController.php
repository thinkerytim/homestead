<?php

class ClosingsController extends \BaseController {
	
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
		View::share('title', 'ThinkClosing - Closings');
		if ( !Auth::user()->isAdmin() ) {
			$closings = Closing::where('agent_id', '=', Auth::user()->id)
				->orWhere('agent_id', '=', Auth::user()->parent)
				->paginate(10);
		} else {
			$closings = Closing::where('id', '>', 0)->paginate(10);
		}
		return View::make('closings.index', array('closings' => $closings));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		return View::make('closings.new');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Closing::$rules);
	    if ($validator->passes()) {
	        $Closing = new Closing;
		    // add fields
		    $Closing->save();

		    return Redirect::to('closings/index')->with('message', 'Closing created.');
		} else {
		    // validation has failed, display error messages
		    return Redirect::to('closings/create')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		View::share('title', 'ThinkClosing - Closing: '.$id);
		$closing 	= Closing::find($id);

		// TODO: get real percentage
		$percentage = rand(0, 100);
		
		return View::make('closings.show', compact('closing','percentage'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'Closing edit form';
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
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
		$closing = Closing::find($id);
		if ( ( Auth::user()->id !== $closing->user_id || Auth::user()->id !== $closing->user->parent ) && !Auth::user()->isAdmin()) {
			Session::flash('alert-class', 'alert-error');
			Session::flash('flash_content', 'You are not the closing owner.');
			return Response::json(['success' => false]);
		}

		if ($closing->delete()){
			Session::flash('alert-class', 'alert-info');
			Session::flash('flash_content', 'Closing deleted.');
			return Response::json(['success' => true]);
		} else {
			Session::flash('alert-class', 'alert-error');
			Session::flash('flash_content', 'Closing not deleted.');
			return Response::json(['success' => false]);
		}
	}


	/**
	 * Remove the specified task from the closing.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function unlinkTask()
	{
		//
		$closing = Closing::find();
    	$closing->tasks()->detach($task);
    
    return $blogpost->tags;
	}

}
