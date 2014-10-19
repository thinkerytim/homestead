@extends('layouts.default')

@section('content')

You have {{ $closings->count() }} scheduled closings.
<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Tasks</th>
			<th>Closes At</th>
		</tr>
	</thead>
	<tbody>
		@if ($closings->count() > 0)
			@foreach ($closings as $closing)
			    @include('closings.closing', array('some'=>'data'))
			@endforeach
		@else
		    <tr><td colspan="4">Nothing to see here</td></tr>
		@endif
	</tbody>
</table>

{{ $closings->links() }}
@stop