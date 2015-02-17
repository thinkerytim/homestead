<?php

class ToursController extends \BaseController {

	public function __construct()
	{
		$this->beforeFilter('ajax', array('on' => array('destroy')));
        $this->beforeFilter('auth', array('except' => array('show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		View::share('title', 'ThinkClosing - Tours');
		if ( !Auth::user()->isAdmin() ) {
			$tours = Tour::where('user_id', '=', Auth::user()->id)
				->paginate(10);
		} else {
			$tours = Tour::where('id', '>', 0)->paginate(10);
		}
		return View::make('tours.index', array('tours' => $tours));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
		$tour 		= Tour::find($id);

		if (!$tour){
			Log::warning('Tour not found for id: '.$id);
			return Response::view('errors.missing', array(), 404);
		}

		$user 		= User::find($tour->user_id);
		$parent		= User::find($tour->parent);

		// check if user is subscribed
		$subscribed = $user->subscribed() ? true : isset($parent) ? $parent->subscribed() : false;
		if (!$subscribed){
			Log::warning('Tour found for id: '.$id.' but User not subscribed.');
			App::abort(403, 'Unauthorized action-- tour owner not subscriber.');
		}

		// we're subscribed and have a tour-- get it
		$website	= $tour->user->website;		
		$url 		= 'http://'.$website.'/index.php?option=com_iproperty&format=raw&task=ajax.getJson&id='.$tour->listing_id;
		$key		= md5($website.$id);

		// check for cache value before grabbing data
		if (Cache::has($key))
		{
			Log::info('Tour found in cache for tour: '.$id);
			$contents = Cache::get($key);
		} else {
			Log::info('Tour not found in cache for tour: '.$id.'. Doing new request to '.$website);
			$contents 	= file_get_contents($url);
			if ($contents){
				Cache::put($key, $contents, 2880); // default store for 48 hours
			} else {
				// listing not found-- return 404
				Log::warning('Object not found for tour: '.$id.' at '.$website);
				return Response::view('errors.missing', array(), 404);
			}
		}
		$data = json_decode($contents);
		return View::make('tours.show', array('data' => $data));
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
		//
	}


}
