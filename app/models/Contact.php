<?php

class Contact extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'contacts';

	// form validation rules

    /* Define Relations */
    public function user()
    {
        return $this->belongsTo('User');
    }
}