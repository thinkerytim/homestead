<!doctype html>
<html lang="en">
	@include('includes.head')
<body>
{{-- POSSIBLE BODY CLASSES: minified, fixed-ribbon, fixed-header, fixed-width
			 You can also add different skin classes such as "smart-skin-1", "smart-skin-2" etc...--}}
{{-- header menu --}}			 
@include('includes.ext_header')
<div id="main" role="main">
	<!-- MAIN CONTENT -->
	<div id="content">
		@yield('content')
	</div>
	<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN PANEL -->
@include('includes.footer')
</body>
</html>