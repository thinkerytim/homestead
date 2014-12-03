<?php

class Message extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'tasks';
    protected $guarded  = array('id');
	protected $guarded 	= array('message');

	// form validation rules

    /* Define Relations */
    public function from()
    {
        return $this->belongsToOne('User', 'from_id'); 
    }

    public function to()
    {
        return $this->belongsToOne('User', 'to_id');
    }
}