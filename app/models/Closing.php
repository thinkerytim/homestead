<?php

class Closing extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'closings';
    protected $dates    = array('closes_at');
    protected $fillable = array('title', 'user_id', 'closes_at');

	// form validation rules

    /* Define Relations */

    public function tasks()
    {
        return $this->belongsToMany('Task')->withPivot('status', 'notes', 'due_at')->orderBy('pivot_due_at', 'asc');
    }

    public function documents()
    {
        return $this->belongsToMany('Document');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}