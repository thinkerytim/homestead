<?php

class Hit extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'hits';
    protected $fillable = array();

	// form validation rules

    /* Define Relations */
    public function tour()
    {
        return $this->belongsTo('Tour');
    }
}