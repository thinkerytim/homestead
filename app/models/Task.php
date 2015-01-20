<?php

class Task extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'tasks';
    protected $dates = array('due_at');

	// form validation rules

    /* Define Relations */

    public function closings()
    {
        return $this->belongsToMany('Closing')->withPivot('status', 'notes', 'due_at');
    }

    public function user()
    {
        return $this->belongsToOne('User');
    }
}