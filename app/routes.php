<?php
/*
*
* FILTERS
*
*/
// check that the user owns the resource
Route::filter('own', function($route, $request, $response)
{
    if (Auth::user()->id)
    {
        return Redirect::to('home');
    }
});

// END FILTERS

Route::get('/', array('as' => 'home', function()
{
	return View::make('pages.home');
}));

Route::get('tos', array('as' => 'tos', function()
{
	return View::make('pages.tos');
}));

Route::get('privacy', array('as' => 'privacy', function()
{
    return View::make('pages.privacy');
}));

/* Admin controller routes */
Route::controller('admin', 'AdminController');

/* Users controller routes */
Route::controller('users', 'UsersController');

/* Closings controller routes */
Route::controller('closings', 'ClosingsController');

/* Tasks controller routes */
Route::resource('task', 'TasksController');

/* Agents controller routes */
Route::resource('agent', 'AgentsController');

/* Messages controller routes */
Route::resource('message', 'MessagesController');

/* Password controller routes */
Route::controller('password', 'RemindersController');

/* Unlink Task from Closing */
Route::delete('closingtask', 'ClosingsController@unlinkTask');

/* Facebook auth routes */
Route::get('login/fb', function() {
    $facebook = new Facebook(Config::get('facebook'));
    $params = array(
        'redirect_uri' => url('/login/fb/callback'),
        'scope' => 'email',
    );
    return Redirect::to($facebook->getLoginUrl($params));
});

Route::get('login/fb/callback', function() {
    $code = Input::get('code');
    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');

    $facebook = new Facebook(Config::get('facebook'));
    $uid = $facebook->getUser();

    if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');

    $me = $facebook->api('/me');

    $user = User::whereUid($uid)->first();
    if (empty($user)) {

        $user = new User;
        $user->firstname = $me['first_name'];
        $user->lastname = $me['last_name'];
        $user->email = $me['email'];
        $user->photo = 'https://graph.facebook.com/'.$me['username'].'/picture?type=large';
        $user->uid = $uid;
        $user->access_token = $facebook->getAccessToken();

        $user->save();

    }

    Auth::login($user);
    return Redirect::to('/')->with('message', 'Logged in with Facebook');
});
