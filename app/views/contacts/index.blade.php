@extends('layouts.admin')

@section('content')
<div class="padding-md">
	<h3 class="header-text m-bottom-md">
		My Contacts
	</h3>

	<div class="row user-profile-wrapper">
		<div class="col-md-12">
			<div class="smart-widget">
				<div class="smart-widget-inner">
					<div class="smart-widget-body">
						<h4 class="header-text m-bottom-md"><button type="button" class="btn btn-success"><i class="fa fa-plus-square-o"></i> New</button>
						</h4>
						<div class="row">
							<div class="col-md-12">
							@include('partials.contacts')
							</div>
						</div><!-- ./row -->
					</div><!-- ./smart-widget-body -->
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
		</div>
	</div>
</div><!-- ./padding-md -->
@stop