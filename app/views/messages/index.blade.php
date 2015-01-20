@extends('layouts.admin')

@section('content')
<div class="padding-md">
	<h3 class="header-text m-bottom-md">
		My Messages
	</h3>

	<div class="row user-profile-wrapper">
		<div class="col-md-12">
			<div class="smart-widget">
				<div class="smart-widget-inner">
					<div class="smart-widget-body">
						<h4 class="header-text m-bottom-md">Unread Messages
						</h4>
						<div class="row">
							<div class="col-md-12">
							<table class="table table-hover">
								<thead>
								    <td>From</td>
								    <td>Subject</td>
								    <td>Date</td>
								</thead>
								<tbody>
									@forelse($messages as $message)
										@include('partials.message')
									@empty
										<tr>
											<td colspan="3">No unread messages!</td>
										</tr>
									@endforelse
								</tbody>
							</table>
							</div>
						</div><!-- ./row -->
						<h4 class="header-text m-bottom-md">Read Messages
						</h4>
						<div class="row">
							<div class="col-md-12">
							<table class="table table-hover">
								<thead>
								    <td>From</td>
								    <td>Subject</td>
								    <td>Date</td>
								</thead>
								<tbody>
									@forelse($messages as $message)
										@include('partials.message')
									@empty
										<tr>
											<td colspan="3">No read messages!</td>
										</tr>
									@endforelse
								</tbody>
							</table>
							</div>
						</div><!-- ./row -->
					</div><!-- ./smart-widget-body -->
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
		</div>
	</div>
</div><!-- ./padding-md -->
@stop