<!doctype html>
<html lang="en">
<head>
	@include('includes.head')
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
	<header class="row">
		@include('includes.header')
	</header>

	<div id="main" class="row">
		@yield('content')
	</div>

	<footer class="row">
		@include('includes.footer')
	</footer>
</div>
</body>
</html>