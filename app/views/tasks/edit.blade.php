@extends('layouts.admin')

@section('content')
{{ Form::model($task, array('action' => array('TasksController@update', $task->id), 'class' => 'form-horizontal m-top-md', 'files' => false, 'method' => 'put' )) }}
<div class="padding-md">
	<h3 class="header-text m-bottom-md">
		Task: {{{ $task->name }}}
	</h3>

	<div class="row user-profile-wrapper">
		<div class="col-md-12">
			<div class="smart-widget">
				<div class="smart-widget-inner">
					<div class="smart-widget-body">
						<h4 class="header-text m-bottom-md">
						</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
								    <label class="col-sm-3 control-label">Name</label>
								    <div class="col-sm-9">
								    	{{ Form::text('name', $task->name, array('class' => 'form-control')) }}
								    </div>
								</div>
								<div class="form-group">
								    <label class="col-sm-3 control-label">Description</label>
								    <div class="col-sm-9">
								    	{{ Form::textarea('description', $task->description, array('class' => 'form-control')) }}
								    </div>
								</div>
								<div class="form-group m-top-lg">
								    <label class="col-sm-3 control-label"></label>
								    <div class="col-sm-9">
								    	{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
								      	<a href="{{ URL::previous() }}" class="btn btn-info m-left-xs">Cancel</a>
								    </div>
								</div>
							</div>
						</div><!-- ./row -->
					</div><!-- ./smart-widget-body -->
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
		</div>
	</div>
</div><!-- ./padding-md -->
{{ Form::close() }}
@stop