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
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>	<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb="assets/images/homeslider_thumb1.jpg"  data-saveperformance="on"  data-title="Intro Slide">
							<!-- MAIN IMAGE -->
							{{ HTML::image('assets/images/dummy.png', 'ALT', ["data-lazyload"=>"assets/images/banner1.jpg","data-bgposition"=>"center top","data-bgfit"=>"cover", "data-bgrepeat"=>"no-repeat"]) }}
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption black_thin_34 skewfromrightshort tp-resizeme rs-parallaxlevel-0"
								data-x="939"
								data-y="164" 
								data-speed="500"
								data-start="2250"
								data-easing="Power3.easeInOut"
								data-splitin="chars"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Admin
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption customin rs-parallaxlevel-0"
								data-x="746"
								data-y="204" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="2000"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 6;">
								{{ HTML::image('assets/images/dummy.png', 'ALT', ["data-lazyload"=>"assets/images/redbg_big.png","data-bgposition"=>"center top","data-bgfit"=>"cover", "data-bgrepeat"=>"no-repeat"]) }}
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption skewfromrightshort rs-parallaxlevel-0"
								data-x="0"
								data-y="334" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="3300"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 7;">
								{{ HTML::image('assets/images/dummy.png', 'ALT', ["data-lazyload"=>"assets/images/macbook.png","data-bgposition"=>"center top","data-bgfit"=>"cover", "data-bgrepeat"=>"no-repeat"]) }}
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption sfl rs-parallaxlevel-0"
								data-x="6"
								data-y="54" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="3100"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 6;">
								{{ HTML::image('assets/images/dummy.png', 'ALT', ["data-lazyload"=>"assets/images/iMac.png","data-bgposition"=>"center top","data-bgfit"=>"cover", "data-bgrepeat"=>"no-repeat"]) }}
							</div>

							<!-- LAYER NR. 5 -->
							<div class="tp-caption black_heavy_60 skewfromleftshort tp-resizeme rs-parallaxlevel-0"
								data-x="710"
								data-y="133" 
								data-speed="500"
								data-start="1850"
								data-easing="Power3.easeInOut"
								data-splitin="chars"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">Think Closing
							</div>

							<!-- LAYER NR. 6 -->
							<div class="tp-caption white_heavy_40 customin tp-resizeme rs-parallaxlevel-0"
								data-x="758"
								data-y="227" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="2050"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Responsive
							</div>

							<!-- LAYER NR. 7 -->
							<div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
								data-x="694"
								data-y="338" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="2600"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.05"
								data-endelementdelay="0.1"
								style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap; color:#333;"><div style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br/>
								Vestibulum auctor suscipit lobortis. Sed quis ipsum risus. <br/>
								Mauris vitae justo non felis pulvinar rhoncus.<br/>In quis massa ut risus sagittis luctus.</div>
							</div>

							<!-- LAYER NR. 8 -->
							<div class="tp-caption black_thin_34 customin tp-resizeme rs-parallaxlevel-0"
								data-x="953"
								data-y="278" 
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="500"
								data-start="2350"
								data-easing="Back.easeOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">Theme
							</div>

							<!-- LAYER NR. 9 -->
							<div class="tp-caption customin rs-parallaxlevel-0"
								data-x="666"
								data-y="310" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="2500"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								style="z-index: 11;">
								{{ HTML::image('assets/images/dummy.png', 'ALT', ["data-lazyload"=>"assets/images/greyline.png","data-bgposition"=>"center top","data-bgfit"=>"cover", "data-bgrepeat"=>"no-repeat"]) }}
							</div>

							<!-- LAYER NR. 10 -->
							<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"
								data-x="733"
								data-y="522" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="2900"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-linktoslide="next"
								style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">
								<a class="btn btn-success btn-lg text-white text-upper m-right-sm" style="color:#fff; line-height:normal;">Purchase Now</a>
							</div>

							<!-- LAYER NR. 11 -->
							<div class="tp-caption customin tp-resizeme rs-parallaxlevel-0"
								data-x="933"
								data-y="522" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="500"
								data-start="3000"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-linktoslide="next"
								style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">
								<a class="btn btn-default btn-lg text-upper" style="color:#777; line-height:normal;">Live Preview</a>
							</div>
						</li>
						<li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-thumb="assets/images/homeslider_thumb3.jpg"  data-saveperformance="on"  data-title="Parallax 3D">
							<!-- MAIN IMAGE -->
							{{ HTML::image('assets/images/dummy.png', 'ALT', ["data-lazyload"=>"assets/images/3dbg.jpg","data-bgposition"=>"center top","data-bgfit"=>"cover", "data-bgrepeat"=>"no-repeat"]) }}
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption fullbg_gradient tp-fade tp-resizeme rs-parallaxlevel-10"
								data-x="center" data-hoffset="0"
								data-y="center" data-voffset="0"
								data-speed="2000"
								data-start="12200"
								data-easing="Power4.easeOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><div class=" rs-slideloop" 			data-easing="Power3.easeInOut"
								data-speed="2"
								data-xs="0"
								data-xe="0"
								data-ys="0"
								data-ye="0"
					>
					&nbsp;
							</div>
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption lft skewtoleftshort rs-parallaxlevel-9"
								data-x="-109"
								data-y="119" 
								data-speed="1000"
								data-start="1100"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-end="7000"
					data-endspeed="1000"
								style="z-index: 3;">
								{{ HTML::image('assets/images/dummy.png', 'ALT', ["data-lazyload"=>"assets/images/3dlayer.png"]) }}
							</div>

							

							<!-- LAYER NR. 8 -->
							<div class="tp-caption light_heavy_70_shadowed lfr randomrotateout tp-resizeme rs-parallaxlevel-10"
								data-x="620"
								data-y="162" 
								data-speed="1000"
								data-start="2900"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-end="9000"
					data-endspeed="1000"
								style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Feature Packed
							</div>

							<!-- LAYER NR. 9 -->
							<div class="tp-caption black_heavy_60 customin randomrotateout tp-resizeme rs-parallaxlevel-10"
								data-x="825"
								data-y="230" 
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="1000"
								data-start="3000"
								data-easing="Power4.easeOut"
								data-splitin="chars"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-end="9200"
					data-endspeed="1000"
								style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">To the Max!
							</div>

							<!-- LAYER NR. 10 -->
							<div class="tp-caption black_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-10"
								data-x="840"
								data-y="320" 
								data-speed="1000"
								data-start="3500"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-end="9400"
					data-endspeed="1000"
								style="z-index: 11; max-width: auto; max-height: auto; white-space: nowrap;">Bootstrap 3
							</div>

							<!-- LAYER NR. 11 -->
							<div class="tp-caption black_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-10"
								data-x="840"
								data-y="360" 
								data-speed="1000"
								data-start="3600"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-end="9600"
					data-endspeed="1000"
								style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;">Responsive Design
							</div>

							<!-- LAYER NR. 12 -->
							<div class="tp-caption black_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-10"
								data-x="840"
								data-y="400" 
								data-speed="1000"
								data-start="3700"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-end="9750"
					data-endspeed="1000"
								style="z-index: 13; max-width: auto; max-height: auto; white-space: nowrap;">Built with LESS
							</div>

							<!-- LAYER NR. 13 -->
							<div class="tp-caption black_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-10"
								data-x="840"
								data-y="440" 
								data-speed="1000"
								data-start="3800"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-end="10000"
					data-endspeed="1000"
								style="z-index: 14; max-width: auto; max-height: auto; white-space: nowrap;">Flat Design
							</div>

							<!-- LAYER NR. 14 -->
							<div class="tp-caption green_bold_bg_20 skewfromright randomrotateout tp-resizeme rs-parallaxlevel-10"
								data-x="840"
								data-y="480" 
								data-speed="1000"
								data-start="3900"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-end="10200"
					data-endspeed="1000"
								style="z-index: 15; max-width: auto; max-height: auto; white-space: nowrap;">And Much More ...
							</div>

							<!-- LAYER NR. 15 -->
							<div class="tp-caption fullrounded customin rs-parallaxlevel-10"
								data-x="center" data-hoffset="0"
								data-y="center" data-voffset="0"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="600"
								data-start="10500"
								data-easing="Power4.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								style="z-index: 16;"><div class=" rs-slideloop" 			data-easing="Power3.easeInOut"
								data-speed="2"
								data-xs="0"
								data-xe="0"
								data-ys="0"
								data-ye="0"
					>
					{{ HTML::image('assets/images/dummy.png', 'ALT', ["data-lazyload"=>"assets/images/redbg.jpg"]) }}
							</div>
							</div>

							<!-- LAYER NR. 16 -->
							<div class="tp-caption white_thin_34 customin randomrotateout tp-resizeme rs-parallaxlevel-10"
								data-x="center" data-hoffset="0"
								data-y="center" data-voffset="-60"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="300"
								data-start="11000"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								style="z-index: 17; max-width: auto; max-height: auto; white-space: nowrap;">Get Started with
							</div>

							<!-- LAYER NR. 17 -->
							<div class="tp-caption white_heavy_70 customin randomrotateout tp-resizeme rs-parallaxlevel-10"
								data-x="center" data-hoffset="0"
								data-y="center" data-voffset="0"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="11300"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								style="z-index: 18; max-width: auto; max-height: auto; white-space: nowrap;"><div class=" rs-slideloop" 			data-easing="Power3.easeInOut"
								data-speed="2"
								data-xs="0"
								data-xe="0"
								data-ys="0"
								data-ye="0"
					>
					ThinkClosing
							</div>
							</div>

							<!-- LAYER NR. 18 -->
							<div class="tp-caption noshadow skewfromright randomrotateout tp-resizeme rs-parallaxlevel-0"
								data-x="center" data-hoffset="0"
								data-y="center" data-voffset="100"
								data-speed="300"
								data-start="11600"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								style="z-index: 19; max-width: auto; max-height: auto; white-space: nowrap;"><div class=" rs-slideloop" 			data-easing="Power3.easeInOut"
								data-speed="2"
								data-xs="0"
								data-xe="0"
								data-ys="0"
								data-ye="0"
					>
					<a href="#" class="largeredbtn" target="_blank">SIGN UP NOW</a>
							</div>
							</div>

							<!-- LAYER NR. 19 -->
							<div class="tp-caption arrowicon customin fadeout rs-parallaxlevel-0"
								data-x="666"
								data-y="444" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="11900"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								style="z-index: 20;"><div class=" rs-slideloop" 			data-easing="Power3.easeInOut"
								data-speed="0.5"
								data-xs="-5"
								data-xe="5"
								data-ys="0"
								data-ye="0"
					>
					<a href="http://codecanyon.net/item/slider-revolution-responsive-wordpress-plugin/2751380?ref=themepunch" target="_blank">{{ HTML::image('assets/images/dummy.png', 'ALT', ["data-lazyload"=>"assets/images/doublearrow2.png","data-ww"=>"18","data-hh"=>"11"]) }}</a>
							</div>
							</div>
						</li>
						<!-- SLIDE  -->
						<li data-transition="zoomin" data-slotamount="7" data-masterspeed="1500" data-thumb="assets/images/homeslider_thumb4.jpg"  data-saveperformance="on"  data-title="Mobile Interaction">
							<!-- MAIN IMAGE -->
							{{ HTML::image('assets/images/dummy.png', 'ALT', ["data-lazyload"=>"assets/images/banner2.jpg","data-bgposition"=>"center top","data-bgfit"=>"cover", "data-bgrepeat"=>"no-repeat"]) }}
							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption lfb rs-parallaxlevel-9"
								data-x="center" data-hoffset="-40"
								data-y="bottom" data-voffset="-10"
								data-speed="1500"
								data-start="2400"
								data-easing="Power4.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								style="z-index: 2;"><img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/iPad_black.png">
							</div>

							<!-- LAYER NR. 2 -->
							<div class="tp-caption lfb rs-parallaxlevel-9"
								data-x="600"
								data-y="361" 
								data-speed="1500"
								data-start="2900"
								data-easing="Power4.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="300"
								style="z-index: 5;"><img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/iPhone_white2.png">
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption black_heavy_70 customin randomrotateout tp-resizeme rs-parallaxlevel-5"
								data-x="315"
								data-y="40" 
								data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
								data-speed="500"
								data-start="1400"
								data-easing="Power3.easeInOut"
								data-splitin="chars"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="600"
								style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Mobile
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption customin randomrotateout rs-parallaxlevel-7"
								data-x="434"
								data-y="98" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="1900"
								data-easing="Power3.easeInOut"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="600"
								style="z-index: 7;"><img src="assets/images/dummy.png" alt="" data-lazyload="assets/images/largegreen.png">
							</div>

							<!-- LAYER NR. 7 -->
							<div class="tp-caption light_heavy_70 customin randomrotateout tp-resizeme rs-parallaxlevel-7"
								data-x="448"
								data-y="106" 
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="300"
								data-start="2200"
								data-easing="Power3.easeInOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="600"
								style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Device
							</div>

							<!-- LAYER NR. 8 -->
							<div class="tp-caption black_bold_40 skewfromrightshort randomrotateout tp-resizeme rs-parallaxlevel-6"
								data-x="619"
								data-y="177" 
								data-speed="500"
								data-start="2500"
								data-easing="Power3.easeInOut"
								data-splitin="chars"
								data-splitout="none"
								data-elementdelay="0.1"
								data-endelementdelay="0.1"
								data-endspeed="600"
								style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Interaction
							</div>
						</li>
					</ul>
					<div class="tp-bannertimer"></div>	
				</div>	<!-- ./tp-banner -->
			</div>	<!-- ./tp-banner-container -->

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
									<li>Closings <span class="font-semi-bold">1</span></li>
									<li>Tasks  <span class="font-semi-bold">10</span></li>
									<li>SubAgents  <span class="font-semi-bold">No</span></li>
									<li>Tours  <span class="font-semi-bold">1</span></li>
									<li>Text Alerts  <span class="font-semi-bold">No</span></li>
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
									<span class="value">$19</span>
									/Month
								</div>
									
								<ul class="pricing-service m-top-sm">
									<li>Closings <span class="font-semi-bold">5</span></li>
									<li>Tasks  <span class="font-semi-bold">50</span></li>
									<li>SubAgents  <span class="font-semi-bold">No</span></li>
									<li>Tours  <span class="font-semi-bold">25</span></li>
									<li>Text Alerts  <span class="font-semi-bold">Yes</span></li>
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
									<span class="value">$99</span>
									/Month
								</div>
									
								<ul class="pricing-service m-top-sm">
									<li>Closings <span class="font-semi-bold">50</span></li>
									<li>Tasks  <span class="font-semi-bold">Unlimited</span></li>
									<li>SubAgents  <span class="font-semi-bold">25</span></li>
									<li>Tours  <span class="font-semi-bold">100</span></li>
									<li>Text Alerts  <span class="font-semi-bold">Yes</span></li>
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
									<span class="value">$149</span>
									/Month
								</div>
									
								<ul class="pricing-service m-top-sm">
									<li>Closings <span class="font-semi-bold">Unlimited</span></li>
									<li>Tasks  <span class="font-semi-bold">Unlimited</span></li>
									<li>SubAgents  <span class="font-semi-bold">Unlimited</span></li>
									<li>Tours  <span class="font-semi-bold">Unlimited</span></li>
									<li>Text Alerts  <span class="font-semi-bold">Yes</span></li>
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

		<!-- Revolution Slider -->
		{{ HTML::script("assets/rs-plugin/js/jquery.themepunch.tools.min.js") }}
		{{ HTML::script("assets/rs-plugin/js/jquery.themepunch.revolution.min.js") }}

		<script type="text/javascript">

		jQuery(document).ready(function() {		
			//Slider Revolution	
			jQuery('.tp-banner').show().revolution(
			{
				dottedOverlay:"none",
				delay:16000,
				startwidth:1170,
				startheight:700,
				hideThumbs:200,
				
				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,
				
				navigationType:"bullet",
				navigationArrows:"solo",
				navigationStyle:"preview4",
				
				touchenabled:"on",
				onHoverStop:"on",
				
				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,
										
										parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
										
				keyboardNavigation:"off",
				
				navigationStyle: "preview2",
				navigationHAlign:"center",
				navigationVAlign:"middle",
				navigationHOffset:0,
				navigationVOffset:20,

				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:20,
				soloArrowLeftVOffset:0,

				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:20,
				soloArrowRightVOffset:0,
						
				shadow:0,
				fullWidth:"on",
				fullScreen:"off",

				spinner:"spinner4",
				
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",
				
				autoHeight:"off",						
				forceFullWidth:"off",						
													
				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,						
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,
				
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				fullScreenOffsetContainer: ".header"	
			});		
			//End Slider Revolution

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