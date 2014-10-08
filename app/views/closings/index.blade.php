@extends('layouts.default')

@section('content')

You have {{ $closings->count() }} scheduled closings.
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Street</th>
		</tr>
	</thead>
	<tbody>
		@if ($closings->count() > 0)
			@foreach ($closings as $closing)
			    @include('view.name', array('some'=>'data'))
			@endforeach
		@else
		    <tr><td colspan="3">Nothing to see here</td></tr>
		@endif
	</tbody>
</table>

{{ $closings->links() }}
@stop