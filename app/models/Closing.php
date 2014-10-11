<?php

class Closing extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'closings';
	protected $guarded 	= array('id');

	// form validation rules

    /* Define Relations */

    public function tasks()
    {
        return $this->belongsToMany('Task');
    }

    public function documents()
    {
        return $this->belongsToMany('Document');
    }
}