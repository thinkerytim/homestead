@extends('layouts.default')

@section('content')
<h3>{{ $closing->title }} Closes: {{ $closing->closes_at->toFormattedDateString() }}</h3>

<div class="table-responsive">
	<table class="table table-striped">
	<thead>
		<tr>
			<th>Status</th>
			<th>Task</th>
			<th>Due</th>
		</tr>
	</thead>
	<tbody>
	@if ($closing->tasks->count() > 0)
		@foreach ($closing->tasks as $task)
		    @include('tasks.task', array('task'=> $task))
		@endforeach
	@else
	    <tr class="success"><td colspan="3">Nothing to do- you're all set!</td></tr>
	@endif
	</tbody>
	</table>
</div>
@if (Auth::user()->isAdmin())
<button type="button" class="btn btn-success btn-sm">
	<span class="glyphicon glyphicon-plus"></span> New Task
</button>
@endif
@stop