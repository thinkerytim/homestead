<?php

class Contact extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'contacts';
    protected $fillable = array('name', 'phone', 'fax', 'mobile', 'email');

	// form validation rules

    /* Define Relations */
    public function user()
    {
        return $this->belongsTo('User');
    }

    public function contacttype()
    {
        return $this->hasOne('ContactType', 'role');
    }

    public function company()
    {
        return $this->belongsTo('Company');
    }
}