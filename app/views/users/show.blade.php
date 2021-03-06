@extends('layouts.admin')

@section('content')
<div class="padding-md">
	<h3 class="header-text m-bottom-md">
		{{{ $user->firstname.' '.$user->lastname }}}
	</h3>
	<div class="row user-profile-wrapper">
		<div class="col-md-3 user-profile-sidebar m-bottom-md">
			<div class="row">
				<div class="col-sm-4 col-md-12">
					<div class="user-profile-pic">
						@if ($user->photo)
						    {{ HTML::image('assets/images/profile/'.$user->photo) }}
						@else
						    <img src="{{ Gravatar::src($user()->email, 300) }}" alt="">
						@endif
						<div class="ribbon-wrapper">
							<div class="ribbon-inner shadow-pulse bg-success">
								Elite
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-12">
					<div class="user-name m-top-sm">{{{ $user->firstname.' '.$user->lastname }}}<i class="fa fa-circle text-success m-left-xs font-14"></i></div>

					<div class="m-top-sm">
						<div>
							<i class="fa fa-map-marker user-profile-icon"></i>
							{{{ $user->city.', '.Auth::user()->state }}}
						</div>

						<div class="m-top-xs">
							<i class="fa fa-briefcase user-profile-icon"></i>
							{{{ $user->company }}}
						</div>

						<div class="m-top-xs">
							<i class="fa fa-external-link user-profile-icon"></i>
							{{{ $user->website }}}
						</div>
					</div>

					<h4 class="m-top-md m-bottom-sm">About Me</h4>
					<p class="m-top-sm">
						{{{ $user->bio }}}
					<p>

					<h4 class="m-top-md m-bottom-sm">Get Social</h4>	
					<a class="social-link facebook-hover" href="{{{ $user->facebook }}}" target="_blank"><i class="fa fa-facebook"></i></a>
					<a class="social-link twitter-hover" href="{{{ $user->twitter }}}" target="_blank"><i class="fa fa-twitter"></i></a>
					<a class="social-link pinterest-hover" href="{{{ $user->pinterest }}}" target="_blank"><i class="fa fa-pinterest"></i></a>
					<a class="social-link linkedin-hover" href="{{{ $user->facebook }}}" target="_blank"><i class="fa fa-linkedin"></i></a>
				</div>
			</div><!-- ./row -->
		</div><!-- ./col -->
		<div class="col-md-9">
			<div class="smart-widget">
				<div class="smart-widget-inner">
					<div class="smart-widget-body">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="profileTab2">
								<!-- this is where the main stuff goes -->
							</div><!-- ./tab-pane -->
						</div><!-- ./tab-content -->
					</div><!-- ./smart-widget-body -->
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
		</div>
	</div>
</div><!-- ./padding-md -->
@stop