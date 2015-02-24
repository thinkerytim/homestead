<?php
use Laracasts\Presenter\PresentableTrait;

class Tour extends Eloquent {
    use PresentableTrait;
	/**
	 * The database table used by the model.
	 * @var string
	 */
	protected $table 	= 'tours';
	protected $fillable = array('listing_id');
    protected $presenter = 'TourPresenter';

	// form validation rules
    public static $rules = array(
        'listing_id'=>'required|min:2'
    );

    /* Define Relations */
    public function user()
    {
        return $this->belongsTo('User');
    }

    public function hits()
    {
        return $this->hasMany('Hits');
    }
}