@extends('layouts.default')

@section('content')
<h3>{{ $closing->title }} Closes: {{ $closing->closes_at->toFormattedDateString() }}</h3>

<ul class="list-group">
	@if ($closing->tasks->count() > 0)
		@foreach ($closing->tasks as $task)
		    @include('tasks.task', array('task'=> $task))
		@endforeach
	@else
	    <li class="list-group-item">Nothing to see here</li>
	@endif
</ul>
@if (Auth::user()->isAdmin())
<button type="button" class="btn btn-success btn-sm">
	<span class="glyphicon glyphicon-plus"></span> New Task
</button>
@endif
@stop