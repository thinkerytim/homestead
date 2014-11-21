<!doctype html>
<html lang="en">
<head>
	@include('includes.head')
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="overflow-hidden">
<div class="wrapper preload">
	@include('includes.sidebar_right')
	@include('includes.header')
	@include('includes.sidebar')
	<div class="main-container">
		@yield('content')
	</div><!-- /main-container -->
	@include('includes.footer')
</div><!-- /wrapper -->

<a href="#" class="scroll-to-top hidden-print"><i class="fa fa-chevron-up fa-lg"></i></a>
</body>
@include('includes.adminscripts')
</html>