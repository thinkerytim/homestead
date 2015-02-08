@extends('layouts.admin')

@section('content')
<!-- new task modal -->
<!-- Modal -->
<div class="modal fade" id="taskModal" tabindex="-1" role="dialog" aria-labelledby="New Task" aria-hidden="true">
{{ Form::open(array('action' => array('TasksController@store'))) }}
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal-label">New Task</h4>
      </div>
      <div class="modal-body">
		<div>
		    <label class="col-sm-3 control-label">Name</label>
		    <div class="col-sm-9">
		    	{{ Form::text('name', '', array('class' => 'form-control')) }}
		    </div>
		</div>
		<div>
		    <label class="col-sm-3 control-label">Description</label>
		    <div class="col-sm-9">
		    	{{ Form::textarea('description', '', array('class' => 'form-control')) }}
		    </div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
      </div>
    </div>
  </div>
  {{ Form::close() }}
</div>

<div class="padding-md">
	<h3 class="header-text m-bottom-md">
		My Tasks
	</h3>

	<div class="row user-profile-wrapper">
		<div class="col-md-12">
			<div class="smart-widget">
				<div class="smart-widget-inner">
					<div class="smart-widget-body">
						<h4 class="header-text m-bottom-md"><button data-toggle="modal" data-target="#taskModal" type="button" class="btn btn-success"><i class="fa fa-plus-square-o"></i> New</button>
						</h4>
						<div class="row">
							<div class="col-md-12">
							@include('partials.tasks')
							</div>
						</div><!-- ./row -->
					</div><!-- ./smart-widget-body -->
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
		</div>
	</div>
</div><!-- ./padding-md -->
@stop