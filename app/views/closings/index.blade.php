@extends('layouts.admin')

@section('content')
<!-- new closing modal -->
<!-- Modal -->
{{ Form::open(array('action' => array('ClosingsController@store'))) }}
<div class="modal fade" id="closingModal" tabindex="-1" role="dialog" aria-labelledby="New Closing" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal-label">New Closing</h4>
      </div>
      <div class="modal-body">
		<div>
		    <label class="col-sm-3 control-label">Title / Address</label>
		    <div class="col-sm-9">
		    	{{ Form::text('title', '', array('class' => 'form-control')) }}
		    </div>
		</div>
		<div>
		    <label class="col-sm-3 control-label">MLS ID</label>
		    <div class="col-sm-9">
		    	{{ Form::text('mls_id', '', array('class' => 'form-control')) }}
		    </div>
		</div>
		<div>
		    <label class="col-sm-3 control-label">Agent</label>
		    <div class="col-sm-9">
		    	{{ Form::select('agent_id', User::select('id', DB::raw('CONCAT(firstname, " ", lastname) AS full_name'))->lists('full_name', 'id'), array('class' => 'form-control')) }}
		    </div>
		</div>
		<div>
		    <label class="col-sm-3 control-label">Buyer</label>
		    <div class="col-sm-9">
		    	{{ Form::select('agent_id', User::select('id', DB::raw('CONCAT(firstname, " ", lastname) AS full_name'))->lists('full_name', 'id'), array('class' => 'form-control')) }}
		    </div>
		</div>
		<div>
		    <label class="col-sm-3 control-label">Seller</label>
		    <div class="col-sm-9">
		    	{{ Form::select('agent_id', User::select('id', DB::raw('CONCAT(firstname, " ", lastname) AS full_name'))->lists('full_name', 'id'), array('class' => 'form-control')) }}
		    </div>
		</div>
		<div>
		    <label class="col-sm-3 control-label">Description</label>
		    <div class="col-sm-9">
		    	{{ Form::textarea('description', '', array('class' => 'form-control')) }}
		    </div>
		</div>
		<div>
		    <label class="col-sm-3 control-label">Private Notes</label>
		    <div class="col-sm-9">
		    	{{ Form::textarea('private_notes', '', array('class' => 'form-control')) }}
		    </div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{ Form::submit('Submit', array('class' => 'btn btn-success')) }}
      </div>
    </div>
  </div>
</div>
{{ Form::close() }}

<div class="padding-md">
	<h3 class="header-text m-bottom-md">
		My Closings
	</h3>

	<div class="row user-profile-wrapper">
		<div class="col-md-12">
			<div class="smart-widget">
				<div class="smart-widget-inner">
					<div class="smart-widget-body">
						<h4 class="header-text m-bottom-md"><button data-toggle="modal" data-target="#closingModal" type="button" class="btn btn-success"><i class="fa fa-plus-square-o"></i> New</button>
						</h4>
						<div class="row">
							<div class="col-md-12">
							@include('partials.closings')
							</div>
						</div><!-- ./row -->
					</div><!-- ./smart-widget-body -->
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
		</div>
	</div>
</div><!-- ./padding-md -->
@stop