@extends('layouts.admin')

@section('content')
<div class="padding-md">
	<h3 class="header-text m-bottom-md">
		User Profile
		<span class="sub-header">
			Welcome back, {{{ $user->present()->fullName }}}
		</span>
	</h3>
@if ($errors->has())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
</div>
@endif
	<div class="row user-profile-wrapper">
		<div class="col-md-3 user-profile-sidebar m-bottom-md">
			<div class="row">
				<div class="col-sm-4 col-md-12">
					<div class="user-profile-pic">
						@if ($user->photo)
						    {{ HTML::image('assets/images/profile/'.$user->photo) }}
						@else
						    <img src="{{ Gravatar::src(Auth::user()->email, 300) }}" alt="">
						@endif
						<div class="ribbon-wrapper">
							<div class="ribbon-inner shadow-pulse bg-success">
								{{{ $user->present()->authLevel }}}
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
								<h4 class="header-text m-top-md">Profile Information</h4>
								{{ Form::model($user, array('action' => array('UsersController@putUpdate', $user->id), 'class' => 'form-horizontal m-top-md', 'files' => true, 'method' => 'put' )) }}
									<div class="form-group">
									    <label class="col-sm-3 control-label">First Name</label>
									    <div class="col-sm-9">
									    	{{ Form::text('firstname', $user->firstname, array('class' => 'form-control')) }}
									    </div>
									</div>
									<div class="form-group">
									    <label class="col-sm-3 control-label">Last Name</label>
									    <div class="col-sm-9">
									    	{{ Form::text('lastname', $user->lastname, array('class' => 'form-control')) }}
									    </div>
									</div>
									@if ($user->isAdmin())
									<div class="form-group">
									    <label class="col-sm-3 control-label">Company</label>
									    <div class="col-sm-9">
									    	{{ Form::text('company', $user->company, array('class' => 'form-control')) }}
									    </div>
									</div>
									@endif
									<div class="form-group">
									    <label class="col-sm-3 control-label">Email</label>
									    <div class="col-sm-9">
									    	{{ Form::email('email', $user->email, array('class' => 'form-control')) }}
									    </div>
									</div>
									<div class="form-group">
									    <label class="col-sm-3 control-label">Address</label>
									    <div class="col-sm-9">
									    	{{ Form::text('address1', $user->address1, array('class' => 'form-control')) }}
									    </div>
									</div>
									<div class="form-group">
									    <label class="col-sm-3 control-label">Address2</label>
									    <div class="col-sm-9">
									      	{{ Form::text('address2', $user->address2, array('class' => 'form-control')) }}
									    </div>
									</div>
									<div class="form-group">
									    <label class="col-sm-3 control-label">City</label>
									    <div class="col-sm-9">
									      	{{ Form::text('city', $user->city, array('class' => 'form-control')) }}
									    </div>
									</div>
									<div class="form-group">
									    <label class="col-sm-3 control-label">State</label>
									    <div class="col-sm-9">
									      	{{ Form::text('state', $user->state, array('class' => 'form-control')) }}
									    </div>
									</div>
									<div class="form-group">
									    <label class="col-sm-3 control-label">Zip</label>
									    <div class="col-sm-9">
									      	{{ Form::text('zip', $user->zip, array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Mobile</label>
									    <div class="col-sm-9">
									      	{{ Form::text('mobile', $user->mobile, array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Phone</label>
									    <div class="col-sm-9">
									      	{{ Form::text('phone', $user->phone, array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Website</label>
									    <div class="col-sm-9">
									      	{{ Form::text('website', $user->website, array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Facebook</label>
									    <div class="col-sm-9">
									      	{{ Form::text('facebook', $user->facebook, array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Twitter</label>
									    <div class="col-sm-9">
									      	{{ Form::text('twitter', $user->twitter, array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Pinterest</label>
									    <div class="col-sm-9">
									      	{{ Form::text('pinterest', $user->pinterest, array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">LinkedIn</label>
									    <div class="col-sm-9">
									      	{{ Form::text('linkedin', $user->linkedin, array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Contact Preference</label>
									    <div class="col-sm-9">
									      	{{ Form::select('reminders', array('email' => 'Email', 'text' => 'Text', 'both' => 'Both'), $user->reminders, array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Bio</label>
									    <div class="col-sm-9">
									      	{{ Form::textarea('bio', $user->bio, array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Photo</label>
									    <div class="col-sm-9">
									      	{{ Form::file('photo', array('class' => 'form-control')) }}
									    </div>
									</div>

									<h4 class="header-text m-top-lg">Password Settings</h4>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Current Password</label>
									    <div class="col-sm-9">
									      	{{ Form::password('current_password', array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">New Password</label>
									    <div class="col-sm-9">
									      	{{ Form::password('new_password', array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Confirm Password</label>
									    <div class="col-sm-9">
									      	{{ Form::password('confirm_password', array('class' => 'form-control')) }}
									    </div>
									</div>

									<div class="form-group m-top-lg">
									    <label class="col-sm-3 control-label"></label>
									    <div class="col-sm-9">
									    	{{ Form::submit('Submit', array('class' => 'btn btn-default')) }}
									      	<a class="btn btn-info m-left-xs">Cancel</a>
									    </div>
									</div>
									{{ Form::token() }}			
								{{ Form::close() }}
							</div><!-- ./tab-pane -->
						</div><!-- ./tab-content -->
					</div><!-- ./smart-widget-body -->
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
		</div>
	</div>
</div><!-- ./padding-md -->
@stop