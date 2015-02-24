<?php

class Hit extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'hits';

	// form validation rules

    /* Define Relations */
    public function tour()
    {
        return $this->belongsTo('Tour');
    }
}