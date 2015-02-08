@extends('layouts.nomenu')

@section('big_content')
<div id="main_content" class="span8 center-block">
	<div class="padding-md">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="pricing-widget bg-danger colorful-widget">
					<div class="pricing-icon">
						<div class="pricing-icon-inner">	
							<i class="fa fa-rocket"></i>
						</div>
					</div>

					<div class="text-center">
						<h4>Basic</h4>
						<h4 class="pricing-value">FREE!</h4>
					</div>

					<ul class="pricing-service m-top-sm">
						<li>Closings <span class="font-semi-bold">1</span></li>
						<li>Tasks  <span class="font-semi-bold">10</span></li>
						<li>Agents <span class="font-semi-bold">No</span></li>
						<li>Tours <span class="font-semi-bold">1</span></li>
						<li>Text Alerts <span class="font-semi-bold">No</span></li>
					</ul>

					<div class="m-top-md text-center">
						<a class="btn btn-danger">Sign Up</a>
					</div>
				</div><!-- ./pricing-widget -->
			</div><!-- .col -->

			<div class="col-md-3 col-sm-6">
				<div class="pricing-widget bg-warning colorful-widget">
					<div class="pricing-icon">
						<div class="pricing-icon-inner">	
							<i class="fa fa-cubes"></i>
						</div>
					</div>

					<div class="text-center">
						<h4>Agent</h4>
						<h4 class="pricing-value">$12/Month</h4>
					</div>

					<ul class="pricing-service m-top-sm">
						<li>Closings <span class="font-semi-bold">5</span></li>
						<li>Tasks  <span class="font-semi-bold">50</span></li>
						<li>Agents <span class="font-semi-bold">No</span></li>
						<li>Tours <span class="font-semi-bold">25</span></li>
						<li>Text Alerts <span class="font-semi-bold">Yes</span></li>
					</ul>

					<div class="m-top-md text-center">
						<a class="btn btn-warning">Sign Up</a>
					</div>
				</div><!-- ./pricing-widget -->
			</div><!-- .col -->

			<div class="col-md-3 col-sm-6">
				<div class="pricing-widget bg-success colorful-widget">
					<div class="pricing-icon">
						<div class="pricing-icon-inner">	
							<i class="fa fa-desktop"></i>
						</div>
					</div>

					<div class="text-center">
						<h4>Broker</h4>
						<h4 class="pricing-value">$49/Month</h4>
					</div>

					<ul class="pricing-service m-top-sm">
						<li>Closings <span class="font-semi-bold">25</span></li>
						<li>Tasks  <span class="font-semi-bold">Unlimited</span></li>
						<li>Agents <span class="font-semi-bold">25</span></li>
						<li>Tours <span class="font-semi-bold">50</span></li>
						<li>Text Alerts <span class="font-semi-bold">Yes</span></li>
					</ul>

					<div class="m-top-md text-center">
						<a class="btn btn-success">Sign Up</a>
					</div>
				</div><!-- ./pricing-widget -->
			</div><!-- .col -->

			<div class="col-md-3 col-sm-6">
				<div class="pricing-widget bg-info colorful-widget">
					<div class="pricing-icon">
						<div class="pricing-icon-inner">	
							<i class="fa fa-trophy"></i>
						</div>
					</div>

					<div class="text-center">
						<h4>Unlimited</h4>
						<h4 class="pricing-value">$99/Month</h4>
					</div>

					<ul class="pricing-service m-top-sm">
						<li>Closings <span class="font-semi-bold">Unlimited</span></li>
						<li>Tasks  <span class="font-semi-bold">Unlimited</span></li>
						<li>Agents <span class="font-semi-bold">Unlimited</span></li>
						<li>Tours <span class="font-semi-bold">Unlimited</span></li>
						<li>Text Alerts <span class="font-semi-bold">Yes</span></li>
					</ul>

					<div class="m-top-md text-center">
						<a class="btn btn-info">Sign Up</a>
					</div>
				</div><!-- ./pricing-widget -->
			</div><!-- .col -->
		</div><!-- ./row -->
	</div><!-- ./padding-md -->
</div><!-- /main-container -->
@stop