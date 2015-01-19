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
		$closings = Closing::where('closes_at', '>=', 'now()')
				->where('agent_id', '=', Auth::user()->id)
				->orWhere('agent_id', '=', Auth::user()->parent)->get();
		$past_closings = Closing::where('closes_at', '<=', 'now()')
				->where('agent_id', '=', Auth::user()->id)
				->orWhere('agent_id', '=', Auth::user()->parent)
				->count();

		$tours = 10;
		$agents = 10;
		$clients = 10;
		$tasks = 10;
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
		} else {
			$closings = Closing::where('id', '>', 0)->paginate(10);
		}
		return View::make('shared.profile')->with('closings', $closings);
	}

}