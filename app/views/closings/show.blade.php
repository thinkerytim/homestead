@extends('layouts.default')

@section('content')
<h3>{{ $closing->title }} Closes: {{ $closing->closes_at }}</h3>

<div class="list-group">
	@foreach ($closing->tasks as $task)
		<a class="list-group-item" href="#">{{$task->name}} <span class="glyphicon glyphicon-pencil"></span><span class="glyphicon glyphicon-trash"></span></a>
    @endforeach
</div>
	

@stop