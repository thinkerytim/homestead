<?php

class ClosingsController extends \BaseController {
	public function __construct()
	{
		$this->beforeFilter('csrf', array('on'=>'post'));
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
		$closings 	= Closing::where('user_id', '=', Auth::user()->id);
		//$count 		= $closings->count();
		return View::make('closings.index', array('closings' => $closings));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
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
		return 'Closing show '.$id;
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
		//
	}


}
