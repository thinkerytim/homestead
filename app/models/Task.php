<?php

class Task extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'tasks';
    protected $fillable = array('name', 'description');

	// form validation rules
    public static $rules = array(
        'name'=>'required|min:2'
    );

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