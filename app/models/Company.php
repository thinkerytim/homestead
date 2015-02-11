<?php

class Closing extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'companies';
    protected $fillable = array('name', 'phone', 'fax', 'email');

	// form validation rules

    /* Define Relations */
    public function user()
    {
        return $this->belongsTo('User');
    }

    public function contacts()
    {
        return $this->hasMany('Contacts');
    }
}