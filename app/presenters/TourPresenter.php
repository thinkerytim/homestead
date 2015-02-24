<?php

use Laracasts\Presenter\Presenter;

class TourPresenter extends Presenter {

    public function isPublished()
    {       
        if ($this->published){
            return '<button type="button" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-check"></span></button>';
        } else {
            return '<button type="button" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-ban-circle"></span></button>';
        }
    }

}