<?php

class Subscription extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'subscriptions';

	// form validation rules


    /* Define Relations */
    public function user()
    {
        return $this->belongsToOne('User');
    }

    public function level()
    {
    	return $this->hasOne('Level');
    }
}