<?php

class Closing extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'closings';
	protected $guarded 	= array('id');
    protected $dates = array('closes_at');

	// form validation rules

    /* Define Relations */

    public function tasks()
    {
        return $this->belongsToMany('Task')->withPivot('status', 'notes', 'due_at');
    }

    public function documents()
    {
        return $this->belongsToMany('Document');
    }
}