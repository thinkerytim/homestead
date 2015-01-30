@extends('layouts.admin')

@section('content')
<div class="padding-md">
	<h4 class="header-text m-top-md">New Closing</h4>
	{{ Form::open( array('action' => array('ClosingController@new'), 'class' => 'form-horizontal m-top-md' )) }}
		<div class="form-group">
		    <label class="col-sm-3 control-label">Title</label>
		    <div class="col-sm-9">
		    	{{ Form::text('title', $closing->title, array('class' => 'form-control')) }}
		    </div>
		</div>
		<div class="form-group">
		    <label class="col-sm-3 control-label">Title</label>
		    <div class="col-sm-9">
		    	{{ Form::text('title', $closing->title, array('class' => 'form-control')) }}
		    </div>
		</div>
		<div class="form-group">
		    <label class="col-sm-3 control-label">Closing Date</label>
		    <div class="col-sm-9">
		    	{{ Form::text('closes_at', $closing->closes_at, array('class' => 'form-control')) }}
		    </div>
		</div>
		{{ Form::token() }}			
	{{ Form::close() }}
</div><!-- ./padding-md -->
@stop