@extends('layouts.admin')

@section('content')
<div class="padding-md">
	<h3 class="header-text m-bottom-md">
		<button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil-square-o"></i> Edit</button> {{{ $agent->firstname }}} {{{ $agent->lastname }}}
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
							agent
							</div>
						</div><!-- ./row -->
					</div><!-- ./smart-widget-body -->
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
		</div>
	</div>
</div><!-- ./padding-md -->
@stop