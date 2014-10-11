<?php

class Subscription extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'subscriptions';
	protected $guarded 	= array('id');

	// form validation rules


    /* Define Relations */
    public function user()
    {
        return $this->belongsToOne('User');
    }
}