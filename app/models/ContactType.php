<?php

class ContactType extends Eloquent {
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'contact_types';

	// form validation rules

    /* Define Relations */
    public function contact()
    {
        return $this->belongsTo('Contact');
    }
}