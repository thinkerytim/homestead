<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	protected $guarded = array('id', 'password');

	public static $rules = array(
    	'firstname'=>'required|alpha|min:2',
    	'lastname'=>'required|alpha|min:2',
    	'email'=>'required|email|unique:users',
    	'company'=>'alpha',
    	'password'=>'required|alpha_num|between:6,12|confirmed',
    	'password_confirmation'=>'required|alpha_num|between:6,12',
    	'recaptcha_response_field' => 'required|recaptcha'
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
		// 0 = guest
		// 1 = agent
		// 2 = admin
	    return $this->role === 2;
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

    public function closings()
    {
        return $this->hasMany('Closing');
    }

    public function subscription()
    {
        return $this->hasOne('Subscription');
    }
}
