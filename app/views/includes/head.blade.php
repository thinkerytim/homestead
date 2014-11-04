<?php
//initilize the page
require_once(app_path()."/inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once(app_path()."/inc/config.ui.php");
?>

<head>
	<meta charset="utf-8">
	<title>SmartAdmin </title>
	<meta name="description" content="">
	<meta name="author" content="The Thinkery LLC">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	{{-- Basic Styles --}}
	{{ HTML::style("css/bootstrap.min.css") }}
	{{ HTML::style("css/font-awesome.min.css") }}


	{{-- SmartAdmin Styles: Please note (smartadmin-production.css) was created using LESS variables --}}
	{{ HTML::style("css/smartadmin-production.min.css") }}
	{{ HTML::style("css/smartadmin-skins.min.css") }}
{{-- 
	@if ($page_css) 
		@foreach ($page_css as $css) 
			{{ HTML::style($css) }}
		@endforeach
	@endif
--}}
	{{-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp --}}
	{{ HTML::style("css/demo.min.css") }}

	{{-- FAVICONS --}}
	<link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon/favicon.ico') }}" type="image/x-icon">
	<link rel="icon" href="{{ URL::asset('assets/img/favicon/favicon.ico') }}" type="image/x-icon">

	{{-- GOOGLE FONT --}}
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

	{{-- Specifying a Webpage Icon for Web Clip
		 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html --}}
	<link rel="apple-touch-icon" href="{{ URL::asset('assets/img/splash/sptouch-icon-iphone.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('assets/img/splash/touch-icon-ipad.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('assets/img/splash/touch-icon-iphone-retina.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('assets/img/splash/touch-icon-iphone-retina.png') }}">

	{{-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance --}}
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	{{-- Startup image for web apps --}}
	<link rel="apple-touch-startup-image" href="{{ URL::asset('assets/img/splash/ipad-landscape.png') }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
	<link rel="apple-touch-startup-image" href="{{ URL::asset('assets/img/splash/ipad-portrait.png') }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
	<link rel="apple-touch-startup-image" href="{{ URL::asset('assets/img/splash/ipphone.png') }}" media="screen and (max-device-width: 320px)">
</head>