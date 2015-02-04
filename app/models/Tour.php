<?php

class Tour extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'tours';

	// form validation rules

    /* Define Relations */
    public function user()
    {
        return $this->belongsToOne('User');
    }
}