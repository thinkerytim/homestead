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
						{{ Form::button('Sign Up', array('class' => 'btn btn-danger', 'id' => 'basic-subscription')); }}
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
						{{ Form::button('Sign Up', array('class' => 'btn btn-warning', 'id' => 'agent-subscription')); }}
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
						{{ Form::button('Sign Up', array('class' => 'btn btn-success', 'id' => 'broker-subscription')); }}
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
						<h4 class="pricing-value">$149/Month</h4>
					</div>

					<ul class="pricing-service m-top-sm">
						<li>Closings <span class="font-semi-bold">Unlimited</span></li>
						<li>Tasks  <span class="font-semi-bold">Unlimited</span></li>
						<li>Agents <span class="font-semi-bold">Unlimited</span></li>
						<li>Tours <span class="font-semi-bold">Unlimited</span></li>
						<li>Text Alerts <span class="font-semi-bold">Yes</span></li>
					</ul>

					<div class="m-top-md text-center">
						{{ Form::button('Sign Up', array('class' => 'btn btn-info', 'id' => 'unlimited-subscription')); }}
					</div>
				</div><!-- ./pricing-widget -->
			</div><!-- .col -->
		</div><!-- ./row -->
	</div><!-- ./padding-md -->
</div><!-- /main-container -->
@stop

@section('extra_scripts')
<!-- Stripe checkout scripts -->
{{ HTML::script("https://checkout.stripe.com/checkout.js") }}
<script>
(function ($) {
  var plan_id = false;
  var handler = StripeCheckout.configure({
    key: 'pk_test_r9dklGb4ky4bd5rVVcxYwrXZ',
    image: '{{secure_asset('assets/images/lightbulb.png')}}',
    token: function(token) {
		$.post( "{{action('UsersController@postSubscribe')}}", { token: token.id, plan: plan_id })
			.done(function( data ) {
				window.location.href = {{action('AdminController@getProfile')}};
			});
    }
  });

  $('#basic-subscription').on('click', function(e) {
  	plan_id = 'basic';
    // Open Checkout with further options
    handler.open({
      name: 'Basic Subscription',
      description: '',
      amount: 0,
      @if (Auth::user())
	    email: '{{ Auth::user()->email }}',
	  @endif
      zipCode: true
    });
    e.preventDefault();
  });

  $('#agent-subscription').on('click', function(e) {
  	plan_id = 'agent';
    // Open Checkout with further options
    handler.open({
      name: 'Agent Subscription',
      description: '',
      amount: 1200,
      @if (Auth::user())
	    email: '{{ Auth::user()->email }}',
	  @endif
	  zipCode: true
    });
    e.preventDefault();
  });

  $('#broker-subscription').on('click', function(e) {
  	plan_id = 'broker';
    // Open Checkout with further options
    handler.open({
      name: 'Broker Subscription',
      description: '',
      amount: 4900,
      @if (Auth::user())
	    email: '{{ Auth::user()->email }}',
	  @endif
      zipCode: true
    });
    e.preventDefault();
  });

  $('#unlimited-subscription').on('click', function(e) {
  	plan_id = 'unlimited';
    // Open Checkout with further options
    handler.open({
      name: 'Unlimited Subscription',
      description: '',
      amount: 14900,
      @if (Auth::user())
	    email: '{{ Auth::user()->email }}',
	  @endif
      zipCode: true
    });
    e.preventDefault();
  });

  // Close Checkout on page navigation
  $(window).on('popstate', function() {
    handler.close();
  });
})(jQuery);
</script>
@stop
