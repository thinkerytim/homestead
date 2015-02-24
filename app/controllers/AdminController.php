<?php

class AdminController extends BaseController {
	public function __construct()
    {
        $this->beforeFilter('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		View::share('title', 'ThinkClosing - Dashboard');

		// get the closings for this user
		if (Auth::user()->isAdmin()){
			$closings = Closing::where('closes_at', '>=', DB::raw('NOW()'))->get();	
			$past_closings = Closing::where('closes_at', '<=', DB::raw('NOW()'))->count();
		} else {
			$closings = Closing::where('closes_at', '>=', DB::raw('NOW()'))
				->where('agent_id', '=', Auth::user()->id)
				->orWhere('agent_id', '=', Auth::user()->parent)->get();
			$past_closings = Closing::where('closes_at', '<=', DB::raw('NOW()'))
				->where('agent_id', '=', Auth::user()->id)
				->orWhere('agent_id', '=', Auth::user()->parent)
				->count();
		}

		// get the tours for this user
		if (Auth::user()->isAdmin()){
			$tours = Tour::all()->count();
			$tour_hits = Hit::all()->count();
		} else {
			$tours = Tour::where('user_id', '=', Auth::user()->id)
				->orWhere('user_id', '=', Auth::user()->parent)->count();
			$tour_hits = Hit::where('user_id', '=', Auth::user()->id)
				->orWhere('user_id', '=', Auth::user()->parent)->count();
		}

		// get the tasks for this user
		if (Auth::user()->isAdmin()){
			$tasks = DB::table('closing_task')->select('id')
						->where('status', '=', '0')->count();	
			$overdue_tasks = DB::table('closing_task')->select('id')
						->where('status', '=', '0')
						->where('due_at', '<=', DB::raw('NOW()'))->count();
		} else {
			$tasks = DB::table('closing_task')->select('id')
						->where('status', '=', '0')
						->where(DB::raw('closing_id IN (SELECT id FROM closings WHERE agent_id = '.Auth::user()->id.')'))->count();	
			$overdue_tasks = DB::table('closing_task')->select('id')
						->where('status', '=', '0')
						->where('due_at', '<=', DB::raw('NOW()'))
						->where(DB::raw('closing_id IN (SELECT id FROM closings WHERE agent_id = '.Auth::user()->id.')'))->count();	
			}

		$agents = 10;
		$clients = 10;
		$overdue_tasks = 10;
		$messages = Message::where('to_id', Auth::id())->get()->groupBy('read');

		return View::make('admin.index', [
		    'messages' => [
		        'unread' => array_get($messages, '0', []),
		        'read' => array_get($messages, '1', []),
		    ],
		    'closings' => $closings,
		    'past_closings' => $past_closings,
		    'tours' => $tours,
		    'clients' => $clients,
		    'tasks' => $tasks,
		    'agents' => $agents,
		    'overdue_tasks' => $overdue_tasks
		]);
	}

	public function getProfile()
	{
		View::share('title', 'ThinkClosing - Profile');
		if ( !Auth::user()->isAdmin() ) {
			$closings = Closing::where('agent_id', '=', Auth::user()->id)
				->orWhere('agent_id', '=', Auth::user()->parent)
				->paginate(10);
			$invoices = [];
		} else {
			$invoices = $user->invoices();
			$closings = Closing::where('id', '>', 0)->paginate(10);
		}

		// get the user object
		$user = User::find(Auth::id());

		return View::make('shared.profile')->with('closings', $closings)->with('user', $user)->with('invoices', $invoices);
	}

}