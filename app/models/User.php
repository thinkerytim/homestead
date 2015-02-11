<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Laravel\Cashier\BillableTrait;
use Laravel\Cashier\BillableInterface;
use Laracasts\Presenter\PresentableTrait;

class User extends Eloquent implements UserInterface, RemindableInterface, BillableInterface {
	// user.role:
	// 0: basic user / client
	// 1: agent
	// 2: broker
	// 3: admin

	use UserTrait, RemindableTrait, BillableTrait, PresentableTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $dates = ['trial_ends_at', 'subscription_ends_at'];
	protected $presenter = 'UserPresenter';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'password_confirmation','remember_token');
	protected $guarded = array('id', 'role');

	public static $rules = array(
    	'firstname'=>'required|alpha|min:2',
    	'lastname'=>'required|alpha|min:2',
    	'email'=>'required|email|unique:users',
    	'password'=>'sometimes|required|alpha_num|between:6,12|confirmed',
    	'password_confirmation'=>'sometimes|required|same:password',
    	'recaptcha_response_field' => 'sometimes|required|recaptcha',
    	'agreement' => 'sometimes|required|accepted',
    	'website'=>'url',
    	'facebook'=>'url',
    	'twitter'=>'url',
    	'pinterest'=>'url',
    	'linkedin'=>'url',
    	'icon' => 'image|max:3000'

    );

	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}

	public function isAdmin()
	{
		// 0: basic user / client
		// 1: agent
		// 2: broker
		// 3: admin
	    return $this->role === 3;
	}

	/* Define Relations */

	public function tasks()
    {
        return $this->hasMany('Task');
    }

    public function documents()
    {
        return $this->hasMany('Document');
    }

    public function received_messages()
    {
        return $this->hasMany('Messages', 'to');
    }

    public function sent_messages()
    {
        return $this->hasMany('Messages', 'from');
    }

    public function closings()
    {
        return $this->hasMany('Closing');
    }

    public function companies()
    {
        return $this->hasMany('Companies');
    }

    public function getParent()
    {
    	return User::find($this->parent);
    }
}
