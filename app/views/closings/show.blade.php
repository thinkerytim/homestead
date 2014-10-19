@extends('layouts.default')

@section('content')
<h3>{{ $closing->title }} Closes: {{ $closing->closes_at->toFormattedDateString() }}</h3>

<div class="list-group">
	@if ($closing->tasks->count() > 0)
		@foreach ($closing->tasks as $task)
		    @include('tasks.task', array('task'=> $task))
		@endforeach
	@else
	    <tr><td colspan="4">Nothing to see here</td></tr>
	@endif
</div>
@stop