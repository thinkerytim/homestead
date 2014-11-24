@extends('layouts.admin')

@section('content')
<div class="padding-md">
	<h3 class="header-text m-bottom-md">
		My Closings
	</h3>

	<div class="row user-profile-wrapper">
		<div class="col-md-12">
			<div class="smart-widget">
				<div class="smart-widget-inner">
					<ul class="nav nav-tabs tab-style2 tab-right bg-grey">
				  		<li>
				  			<a href="#profileTab2" data-toggle="tab">
				  				<span class="icon-wrapper"><i class="fa fa-book"></i></span>
				  				<span class="text-wrapper">Account</span>
				  			</a>
				  		</li>
				  		<li class="active">
				  			<a href="#profileTab1" data-toggle="tab">
				  				<span class="icon-wrapper"><i class="glyphicon glyphicon-list-alt"></i></span>
				  				<span class="text-wrapper">Closings</span>
				  			</a>
				  		</li>
					</ul>
					<div class="smart-widget-body">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="profileTab1">
								<h4 class="header-text m-bottom-md">Closings</h4>
								<div class="row">
									<div class="col-md-12">
									@include('partials.closings')
									</div>
								</div><!-- ./row -->
							</div><!-- ./tab-pane -->
							<div class="tab-pane fade" id="profileTab2">
								<h4 class="header-text m-top-md">General Information</h4>
								<form class="form-horizontal m-top-md">
									<div class="form-group">
									    <label class="col-sm-3 control-label">Name</label>
									    <div class="col-sm-9">
									      	<input type="text" class="form-control" value="Jane Doe">
									    </div>
									</div>
									<div class="form-group">
									    <label class="col-sm-3 control-label">Surname</label>
									    <div class="col-sm-9">
									      	<input type="text" class="form-control">
									    </div>
									</div>
									<div class="form-group">
									    <label class="col-sm-3 control-label">Gender</label>
									    <div class="col-sm-9">
									      	<div class="radio inline-block">
												<div class="custom-radio m-right-xs">
													<input type="radio" id="inlineRadio1" name="profileGender">
													<label for="inlineRadio1"></label>
												</div>
												<div class="inline-block vertical-top">Male</div>
											</div>
											<div class="radio inline-block m-left-sm">
												<div class="custom-radio m-right-xs">
													<input type="radio" id="inlineRadio2" name="profileGender">
													<label for="inlineRadio2"></label>
												</div>
												<div class="inline-block vertical-top">Female</div>
											</div>
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Address</label>
									    <div class="col-sm-9">
									      	<textarea rows="4" class="form-control"></textarea>
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Phone</label>
									    <div class="col-sm-9">
									      	<input type="text" class="form-control" value="">
									    </div>
									</div>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Website</label>
									    <div class="col-sm-9">
									      	<input type="text" class="form-control" value="">
									    </div>
									</div>

									<h4 class="header-text m-top-lg">Security Setting</h4>

									<div class="form-group">
									    <label class="col-sm-3 control-label">Security Question</label>
									    <div class="col-sm-9">
									      	<input type="text" class="form-control" value="">
									    </div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Security Browsing</label>
									    <div class="col-sm-9">
									    	<div class="m-top-xs">
										      	<div class="custom-checkbox">
													<input type="checkbox" id="securityChk1">
													<label for="securityChk1"></label>
												</div>
												Yes
												<div class="custom-checkbox m-left-sm">
													<input type="checkbox" id="securityChk2">
													<label for="securityChk2"></label>
												</div>
												No
											</div>
									    </div>
									</div>

									<div class="form-group m-top-lg">
									    <label class="col-sm-3 control-label"></label>
									    <div class="col-sm-9">
									      	<a class="btn btn-default">Submit</a>
									      	<a class="btn btn-info m-left-xs">Cancel</a>
									    </div>
									</div>								
								</form>
							</div><!-- ./tab-pane -->
						</div><!-- ./tab-content -->
					</div><!-- ./smart-widget-body -->
				</div><!-- ./smart-widget-inner -->
			</div><!-- ./smart-widget -->
		</div>
	</div>
</div><!-- ./padding-md -->
@stop