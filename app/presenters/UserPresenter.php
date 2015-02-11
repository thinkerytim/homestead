<?php

use Laracasts\Presenter\Presenter;

class UserPresenter extends Presenter {

    public function fullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function accountAge()
    {
        return $this->created_at->diffForHumans();
    }

    public function authLevel()
    {
    	if ($this->role == 3) {
    		return 'Admin';
    	}
        return ucfirst($this->stripe_subscription);
    }

}