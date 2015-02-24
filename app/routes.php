<?php
/*
*
* FILTERS
*
*/
/*// check that the user owns the resource
Route::filter('own', function($route, $request, $response)
{
    if (Auth::user()->id)
    {
        return Redirect::to('home');
    }
});*/

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

Route::get('signup', array('as' => 'signup', function()
{
    // only allow signed in users to create subscriptions
    if (Auth::user()){
        return View::make('pages.signup');
    } else {
        return Redirect::guest('users/login')->with('message', 'Please sign up or log in before creating a subscription.');
    }
}));

/* Admin controller routes */
Route::controller('admin', 'AdminController');

/* Users controller routes */
Route::controller('users', 'UsersController');

/* Closings controller routes */
Route::resource('closings', 'ClosingsController');

/* Tasks controller routes */
Route::resource('tasks', 'TasksController');

/* Agents controller routes */
Route::resource('agents', 'AgentsController');

/* Messages controller routes */
Route::resource('messages', 'MessagesController');

/* Tours controller routes */
Route::resource('tours', 'ToursController');

/* Contacts controller routes */
Route::resource('contacts', 'ContactsController');

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

// invoice download link
Route::get('invoice', array('as' => 'download_invoice', function(){
    if (Auth::user()){
        $invoice = Input::get('invoice_id');
        return $user->downloadInvoice($invoice->id, [
            'vendor'  => 'The Thinkery LLC',
            'product' => 'Think Closing Subscription',
        ]);
    } else {
        return Redirect::guest('users/login')->with('message', 'Please sign up or log in before downloading invoice.');
    }
}));