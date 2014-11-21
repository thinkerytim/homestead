@extends('layouts.nomenu')

@section('content')
<div class="error-inner">
	<div class="error-type"><h1>404</h1></div>
	<h1>Page Not Found</h1>
	<p>Look like the page you're looking for isn't here anymore.
		Try typing the address again or start over from the home page.</p>
	<div class="m-top-md">
		<a href="/" class="btn btn-default btn-lg text-upper">Back to Home</a>
	</div>
</div><!-- ./error-inner -->
@stop