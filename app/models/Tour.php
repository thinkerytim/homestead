<?php

class Tour extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'tours';
	protected $fillable = array('listing_id');

	// form validation rules
    public static $rules = array(
        'listing_id'=>'required|min:2'
    );

    /* Define Relations */
    public function user()
    {
        return $this->belongsTo('User');
    }
}