<?php

class Document extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'documents';

	// form validation rules


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