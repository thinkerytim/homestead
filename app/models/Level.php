<?php

class Level extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'levels';

	// form validation rules


    /* Define Relations */
    public function subscription()
    {
        return $this->belongsToMany('Subscription');
    }
}