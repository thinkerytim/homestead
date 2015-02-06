<?php

class MessagesController extends \BaseController {

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
		View::share('title', 'ThinkClosing - Messages');
		
		$messages 	= Message::where('to_id', '=', Auth::user()->id)->paginate(10);
		$unread 	= Message::where('to_id', '=', Auth::user()->id)
						->where('status', '=', 0)
						->count();

		View::share('unread', $unread);

		return View::make('messages.index', array('messages' => $messages));
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
		// first check if user's ID matches & they are admin
	}


}
