<?php

class Document extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'documents';
	protected $guarded 	= array('id');

	// form validation rules
	public static $rules = array(
    	'firstname'=>'required|alpha|min:2',
    	'lastname'=>'required|alpha|min:2',
    	'email'=>'required|email|unique:users',
    	'company'=>'alpha',
    	'password'=>'required|alpha_num|between:6,12|confirmed',
    	'password_confirmation'=>'required|alpha_num|between:6,12'
    );

    /* Define Relations */

    public function closings()
    {
        return $this->belongsToMany('Closing');
    }

    public function user()
    {
        return $this->belongsToOne('User');
    }
}