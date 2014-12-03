<!DOCTYPE html>
<html lang="en">
	<!--
	#######################################
		- THE HEAD PART -
	######################################
	-->
	<head>
    	<meta charset="utf-8">
    	<title>ThinkClosing</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="ThinkClosing-- real estate broker and agent closing tool.">
	    <meta name="author" content="The Thinkery LLC">

	    <!-- Bootstrap core CSS -->
	    {{ HTML::style("assets/bootstrap/css/bootstrap.min.css") }}
		
		<!-- Font Awesome -->
		{{ HTML::style("css/font-awesome.css") }}

		<!-- ionicons -->
		{{ HTML::style("css/ionicons.min.css") }}
		
		<!-- Owl -->
		{{ HTML::style("css/owl.carousel.min.css") }}
		{{ HTML::style("css/owl.theme.default.min.css") }}

		<!-- Revolution Slider -->
		{{ HTML::style("css/style.css") }}
		{{ HTML::style("assets/frontend/rs-plugin/css/settings.css") }}
		{{ HTML::style("css/extralayers.css") }}

		<!-- Simplify -->
		{{ HTML::style("css/simplify.css") }}

		<style>
			.container {
			    margin-top: 20px;
			}

			/* Carousel Styles */
			.carousel-indicators .active {
			    background-color: #2980b9;
			}

			.carousel-inner img {
			    width: 100%;
			    max-height: 460px
			}

			.carousel-control {
			    width: 0;
			}

			.carousel-control.left,
			.carousel-control.right {
				opacity: 1;
				filter: alpha(opacity=100);
				background-image: none;
				background-repeat: no-repeat;
				text-shadow: none;
			}

			.carousel-control.left span {
				padding: 15px;
			}

			.carousel-control.right span {
				padding: 15px;
			}

			.carousel-control .glyphicon-chevron-left, 
			.carousel-control .glyphicon-chevron-right, 
			.carousel-control .icon-prev, 
			.carousel-control .icon-next {
				position: absolute;
				top: 45%;
				z-index: 5;
				display: inline-block;
			}

			.carousel-control .glyphicon-chevron-left,
			.carousel-control .icon-prev {
				left: 0;
			}

			.carousel-control .glyphicon-chevron-right,
			.carousel-control .icon-next {
				right: 0;
			}

			.carousel-control.left span,
			.carousel-control.right span {
				background-color: #000;
			}

			.carousel-control.left span:hover,
			.carousel-control.right span:hover {
				opacity: .7;
				filter: alpha(opacity=70);
			}

			/* Carousel Header Styles */
			.header-text {
			    position: absolute;
			    top: 20%;
			    left: 1.8%;
			    right: auto;
			    width: 96.66666666666666%;
			    color: #fff;
			}

			.header-text h2 {
			    font-size: 40px;
			}

			.header-text h2 span {
			    background-color: #2980b9;
				padding: 10px;
			}

			.header-text h3 span {
				background-color: #000;
				padding: 15px;
			}

			.btn-min-block {
			    min-width: 170px;
			    line-height: 26px;
			}

			.btn-theme {
			    color: #fff;
			    background-color: transparent;
			    border: 2px solid #fff;
			    margin-right: 15px;
			}

			.btn-theme:hover {
			    color: #000;
			    background-color: #fff;
			    border-color: #fff;
			}
		</style>

	</head>

<!--
#######################################
	- THE BODY PART -
######################################
-->
	<body>
		<div class="wrapper front-end-wrapper">
			<header class="navbar front-end-navbar" data-spy="affix" data-offset-top="1">
			  <div class="container">
			    <div class="navbar-header">
			      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a href="/" class="navbar-brand"><strong><span class="text-success">Think</span>Closing</strong></a>
			    </div>
			    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			      <ul class="nav navbar-nav">
			        <li>
			          <a href="#about">About</a>
			        </li>
			        <li>
			          <a href="#features">Features</a>
			        </li>
			        <li class="active">
			          <a href="#pricing">Pricing</a>
			        </li>
			        <li>
			          <a href="#contact">Contact</a>
			        </li>
			      </ul>
			      <ul class="nav navbar-nav navbar-right">
			      	@if (Auth::check())
						<li class="btn-link"><a href="{{ action('AdminController@getIndex', array()) }}" class="btn btn-sm btn-success">My Account</a></li>
						<li class="btn-link"><a href="{{ action('UsersController@getLogout', array()) }}" class="btn btn-sm btn-warning">Logout</a></li>
			      	@else
			        	<li class="btn-link"><a href="{{ action('UsersController@getLogin', array()) }}" class="btn btn-sm btn-success">Login</a></li>
			        	<li class="btn-link"><a href="{{ action('UsersController@getRegister', array()) }}" class="btn btn-sm btn-purple">Register</a></li>
		        	@endif
			      </ul>
			    </nav>
			  </div>
			</header>

			<!--
			#################################
				- THEMEPUNCH BANNER -
			#################################
			-->
			<!-- Carousel -->
	    	<div id="carousel-index" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
				  	<li data-target="#carousel-index" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-index" data-slide-to="1"></li>
				    <li data-target="#carousel-index" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
				    <div class="item active">
				    	<img src="{{asset('assets/images/slide1.jpg')}}" alt="">
	                    <!-- Static Header -->
	                    <div class="header-text hidden-xs">
	                        <div class="col-md-12 text-center">
	                            <h2>
	                            	<span>Welcome to <strong>ThinkClosing!</strong></span>
	                            </h2>
	                            <br>
	                            <h3>
	                            	<span>Your one-stop shop for advanced real estate marketing tools.</span>
	                            </h3>
	                            <br>
	                            <div class="">
	                                <a class="btn btn-theme btn-sm btn-min-block" href="{{ action('UsersController@getLogin', array()) }}">Login</a><a class="btn btn-theme btn-sm btn-min-block" href="{{ action('UsersController@getRegister', array()) }}">Register</a></div>
	                        </div>
	                    </div><!-- /header-text -->
				    </div>
				    <div class="item">
				    	<img src="{{asset('assets/images/slide2.jpg')}}" alt="">
				    	<!-- Static Header -->
	                    <div class="header-text hidden-xs">
	                        <div class="col-md-12 text-center">
	                            <h2>
	                                <span>Manage your <strong>Closings</strong></span>
	                            </h2>
	                            <br>
	                            <h3>
	                            	<span>Keep in contact with your buyers and sellers-- never miss a close date.</span>
	                            </h3>
	                            <br>
	                            <div class="">
	                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Login</a><a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
	                        </div>
	                    </div><!-- /header-text -->
				    </div>
				    <div class="item">
				    	<img src="{{asset('assets/images/slide3.jpg')}}" alt="">
				    	<!-- Static Header -->
	                    <div class="header-text hidden-xs">
	                        <div class="col-md-12 text-center">
	                            <h2>
	                                <span><strong>Virtual Tour</strong> System</span>
	                            </h2>
	                            <br>
	                            <h3>
	                            	<span>Fully integrated with Intellectual Property-- no data entry!</span>
	                            </h3>
	                            <br>
	                            <div class="">
	                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Login</a><a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
	                        </div>
	                    </div><!-- /header-text -->
				    </div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-index" data-slide="prev">
			    	<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-index" data-slide="next">
			    	<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div><!-- /carousel -->

			<div class="section bg-white section-padding" id="about">
				<div class="container">
					<div class="text-center">
						<h3 class="text-upper no-m-top">START BUILDING YOUR <span class="text-success">REAL ESTATE MARKETING EMPIRE!</span></h3>
						<p>Leverage the power of Intellectual Property to market like a pro!</p>
					</div>

					<div class="row" style="margin-top:70px;">
						<div class="col-md-4 text-center">
							<div class="how-it-work-list fadeInRight animation-element disabled">
								<div class="how-it-work-icon">
									<i class="fa fa-list-ol fa-3x"></i>
								</div>

								<h4 class="m-top-md text-upper">Closing Manager</h4>

								<p style="margin-top:30px;">Schedule tasks, remind buyers and sellers of deadlines and dates, and manager relationships with your customers.</p>
							</div>
						</div>

						<div class="col-md-4 text-center">
							<div class="how-it-work-list fadeInRight animation-delay2 animation-element disabled">
								<div class="how-it-work-icon">
									<i class="fa fa-group fa-3x"></i>
								</div>

								<h4 class="m-top-md text-upper">Virtual Tours</h4>

								<p style="margin-top:30px;">Simple, effective and beautiful virtual tours-- with no image uploads, no manual data entry, no problem!</p>
							</div>
						</div>

						<div class="col-md-4 text-center">
							<div class="how-it-work-list fadeInRight animation-delay4 animation-element disabled">
								<div class="how-it-work-icon">
									<i class="fa fa-laptop fa-3x"></i>
								</div>

								<h4 class="m-top-md text-upper">Instant IDX Websites</h4>

								<p style="margin-top:30px;">Create a professional, FlexMLS-powered IDX website in minutes with <a href="https://www.bonfiresites.com">Bonfire Sites</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="section bg-dark-blue section-padding" id="features">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<img src="assets/images/mockup1.png" alt="" class="fadeInRight animation-element disabled">
						</div>
						<div class="col-sm-6">
							<h3 class="text-upper">THE FEATURES <span class="text-success">YOU WANT</span></h3>
							<p>No one knows real estate marketing like we do. Learn more!</p>
							
							<div class="feature-wrapper m-top-lg fadeInUp animation-element disabled">
								<div class="feature-icon">
									<div class="feature-icon-inner bg-danger text-white">
										<i class="fa fa-mobile fa-2x"></i>
									</div>
								</div>
								<div class="feature-detail">
								    <div class="h4 m-bottom-xs no-m-top">Stay in Contact</div>
								    More legitimate touches on your clients means better relationships.
								</div>
							</div>

							<div class="feature-wrapper fadeInUp animation-element animation-delay2 disabled">
								<div class="feature-icon">
									<div class="feature-icon-inner bg-purple text-white">
										<i class="fa fa-eye fa-2x"></i>
									</div>
								</div>
								<div class="feature-detail">
								    <div class="h4 m-bottom-xs">Virtual Tours</div>
								    Virtual tours with no data entry! Fully automated, and easier than ever before.
								</div>
							</div>

							<div class="feature-wrapper fadeInUp animation-element animation-delay4 disabled">
								<div class="feature-icon">
									<div class="feature-icon-inner bg-success text-white">
										<i class="fa fa-home fa-2x"></i>
									</div>
								</div>
								<div class="feature-detail">
								    <div class="h4 m-bottom-xs">Admin Dashboard</div>
								    Stay up-to-date on what your clients are doing, and when they do it.
								</div>
							</div>

							<div class="feature-wrapper fadeInUp animation-element animation-delay6 disabled">
								<div class="feature-icon">
									<div class="feature-icon-inner bg-info text-white">
										<i class="fa fa-leaf fa-2x"></i>
									</div>
								</div>
								<div class="feature-detail">
								    <div class="h4 m-bottom-xs">Affordable</div>
								    Plans for agents, brokers, and agencies, starting at FREE!
								</div>
							</div>
						</div><!-- ./col -->
					</div><!-- ./row -->
				</div><!-- ./container -->
			</div><!-- ./section -->

			<div class="section bg-grey section-padding" id="pricing">
				<div class="container">
					<div class="text-center">
						<h3 class="text-upper">Pricing Plans</h3>
						<p>Choose a Pricing Plan or Start a Free Trial.</p>
					</div>

					<div class="row m-top-lg">
						<div class="col-md-3 col-sm-6">
							<div class="pricing-widget clean-pricing bounceIn animation-element disabled">
								<div class="pricing-type bg-info text-center">Basic</div>
								<div class="pricing-value bg-grey">
									<span class="value">$0</span>
									/Month
								</div>

								<ul class="pricing-service m-top-sm">
									<li>Closings: <span class="font-semi-bold">1</span></li>
									<li>Tasks:  <span class="font-semi-bold">10</span></li>
									<li>Agents:  <span class="font-semi-bold">No</span></li>
									<li>Tours:  <span class="font-semi-bold">1</span></li>
									<li>Text Alerts:  <span class="font-semi-bold">No</span></li>
								</ul>

								<div class="m-top-md m-bottom-md text-center">
									<a class="btn btn-info">Sign Up</a>
								</div>
							</div><!-- ./pricing-widget -->
						</div><!-- .col -->

						<div class="col-md-3 col-sm-6">
							<div class="pricing-widget clean-pricing bounceIn animation-element disabled animation-delay2">
								<div class="pricing-type bg-danger text-center">Agent</div>
								<div class="pricing-value bg-grey">
									<span class="value">$12</span>
									/Month
								</div>
									
								<ul class="pricing-service m-top-sm">
									<li>Closings: <span class="font-semi-bold">5</span></li>
									<li>Tasks:  <span class="font-semi-bold">50</span></li>
									<li>Agents:  <span class="font-semi-bold">No</span></li>
									<li>Tours:  <span class="font-semi-bold">25</span></li>
									<li>Text Alerts:  <span class="font-semi-bold">Yes</span></li>
								</ul>

								<div class="m-top-md m-bottom-md text-center">
									<a class="btn btn-danger">Sign Up</a>
								</div>
							</div><!-- ./pricing-widget -->
						</div><!-- .col -->

						<div class="col-md-3 col-sm-6">
							<div class="pricing-widget clean-pricing bounceIn animation-element disabled animation-delay4">
								<div class="pricing-type bg-purple text-center">Broker</div>
								<div class="pricing-value bg-grey">
									<span class="value">$49</span>
									/Month
								</div>
									
								<ul class="pricing-service m-top-sm">
									<li>Closings: <span class="font-semi-bold">25</span></li>
									<li>Tasks:  <span class="font-semi-bold">Unlimited</span></li>
									<li>Agents:  <span class="font-semi-bold">25</span></li>
									<li>Tours:  <span class="font-semi-bold">50</span></li>
									<li>Text Alerts:  <span class="font-semi-bold">Yes</span></li>
								</ul>

								<div class="m-top-md m-bottom-md text-center">
									<a class="btn btn-purple">Sign Up</a>
								</div>
							</div><!-- ./pricing-widget -->
						</div><!-- .col -->

						<div class="col-md-3 col-sm-6">
							<div class="pricing-widget clean-pricing bounceIn animation-element disabled animation-delay6">
								<div class="pricing-type bg-success text-center">Unlimited</div>
								<div class="pricing-value bg-grey">
									<span class="value">$99</span>
									/Month
								</div>
									
								<ul class="pricing-service m-top-sm">
									<li>Closings: <span class="font-semi-bold">Unlimited</span></li>
									<li>Tasks:  <span class="font-semi-bold">Unlimited</span></li>
									<li>Agents:  <span class="font-semi-bold">Unlimited</span></li>
									<li>Tours:  <span class="font-semi-bold">Unlimited</span></li>
									<li>Text Alerts:  <span class="font-semi-bold">Yes</span></li>
								</ul>

								<div class="m-top-md m-bottom-md text-center">
									<a class="btn btn-success">Sign Up</a>
								</div>
							</div><!-- ./pricing-widget -->
						</div><!-- .col -->
					</div><!-- ./row -->
				</div><!-- ./container -->
			</div><!-- section -->	

			<div class="section bg-white section-padding" id="contact">
				<div class="container text-center">
					<h3 class="text-upper">Subscribe to our <span class="b-b b-light">newsletter</span> list</h3>
					<p>Subscribing to our newsletter you will always be update with the latest news from us.</p>

					<div class="row m-top-md">
						<div class="col-md-6 col-md-offset-3">
							<div class="input-group fadeInLeft animation-element disabled">
						    	<input type="text" class="form-control input-lg">
						      	<span class="input-group-btn">
						        	<button class="btn btn-default btn-lg" type="button">Subscribe</button>
						      	</span>
						    </div><!-- /input-group -->
						</div><!-- ./col -->
					</div><!-- ./row -->
				</div>
			</div><!-- ./section -->
		
			<footer class="front-end-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h4>Contact Us</h4>
							<address class="m-top-md">
							  <strong>The Thinkery LLC</strong><br>
								811 N 7th Street<br>
								Coeur d' Alene ID 83814<br>
								<div class="seperator"></div>
								<strong>Email : <span class="theme-font"><a href="mailto:info@thethinkery.net">info@thethinkery.net</a></span></strong><br>
								<strong>Website : <span class="theme-font"><a href="http://www.thethinkery.net" target="_blank">www.thethinkery.net</a></span></strong>
							</address>
						</div><!-- ./col -->
						<div class="col-md-9">
							<h4>Quick Link</h4>
							<ul class="list-unstyled m-top-md">
								<li><a href="#">About Us</a></li>
								<li><a href="/privacy">Privacy Policy</a></li>
								<li><a href="/tos">Term & Conditions</a></li>
								<li><a href="#">FAQS</a></li>
							</ul>
						</div><!-- ./col -->
					</div><!-- ./row -->
				</div><!-- ./container -->
			</footer>

			<a href="#" class="scroll-to-top hidden-print"><i class="fa fa-chevron-up fa-lg"></i></a>
		</div><!-- /wrapper -->

		<!-- Jquery -->
		{{ HTML::script("assets/javascript/jquery-1.11.1.min.js") }}

		<!-- Bootstrap -->
		{{ HTML::script("assets/bootstrap/js/bootstrap.min.js") }}

		<!-- Modernizr -->
		{{ HTML::script("assets/javascript/modernizr.min.js") }}

		<!-- Owl -->
		{{ HTML::script("assets/javascript/owl.carousel.min.js") }}

		<!-- Waypoint -->
		{{ HTML::script("assets/javascript/waypoints.min.js") }}

		<!-- ScrollTo -->
		{{ HTML::script("assets/javascript/jquery.scrollTo.min.js") }}

		<!-- Local Scroll -->
		{{ HTML::script("assets/javascript/jquery.localScroll.min.js") }}


		<script type="text/javascript">

		jQuery(document).ready(function() {		

			//Section Animation
			if (Modernizr.mq('(min-width: 1349px)')) {
				$('.animation-element').waypoint(function() {
						$(this).removeClass('disabled');
				}, { offset: 700 });
			}
			else if (Modernizr.mq('(min-width: 992px)') && Modernizr.mq('(max-width: 1349px)')) {
				$('.animation-element').waypoint(function() {
						$(this).removeClass('disabled');
				}, { offset: 550 });
			}
			else	{
				$('.animation-element').removeClass('disabled');
			}

			//Testimonial carousel
			$('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    nav:false,
			    items:1,
			    autoplay:true,
			    autoplayTimeout:2500,
			    autoplayHoverPause:true,
			    smartSpeed:500
			});

			//Scrollto section
	        $('.front-end-wrapper .navbar-collapse .navbar-nav').localScroll({
	          duration:800,
	          offset: -100
	        });
		});	
		
	</script>
					
	</body>
</html>