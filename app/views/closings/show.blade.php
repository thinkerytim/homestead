@extends('layouts.admin')

@section('content')
<div class="padding-md">
	<h3 class="header-text m-bottom-md">
		{{ $closing->title }} Closes: {{ $closing->closes_at->toFormattedDateString() }}
	</h3>

	<div class="row user-profile-wrapper">
		<div class="col-md-12">
			<div class="smart-widget">
				<div class="smart-widget-inner">
					<div class="smart-widget-body">
						<!-- progress bar -->
						<div class="progress">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{{ $percentage }}}" aria-valuemin="0" aria-valuemax="100" style="width: {{{ $percentage }}}%">
						    	<span class="sr-only">{{{ $percentage }}} Complete (success)</span>
						  	</div>
						</div>
						<h4 class="header-text m-bottom-md">
							<button type="button" class="btn btn-success"><i class="fa fa-plus-square-o"></i> Add Task</button>
						</h4>
						<div class="row">
							<div class="col-md-12">
								{{ Form::token() }}
								<input name="_closing" type="hidden" value="{{ $closing->id }}" />
								@forelse($closing->tasks as $task)
									@include('partials.task', array('task'=> $task))
								@empty
								    <tr>
								    	<td colspan="3">No tasks!</td>
								    </tr>
								@endforelse
							</div>
						</div><!-- ./row -->
					</div><!-- ./smart-widget-body -->
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
		</div>
	</div>
</div><!-- ./padding-md -->
@stop