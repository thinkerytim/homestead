<table class="table table-hover">
<thead>
	<td>ID</td>
	<td>Name</td>
	<td>Delete</td>
</thead>
<tbody>
@forelse($tasks as $task)
	<tr id="row{{ $task->id }}">
    	<td>{{{ $task->id }}}</td>
    	<td><a href="{{ action('TasksController@edit', array($task->id)) }}">{{{ $task->name }}}</a></td>
    	<td>
        {{ Form::open(['data-remote', 'method' => 'DELETE', 'action' => ['TasksController@destroy', $task->id] ]) }}
            {{ HTML::decode(Form::button('<i class="glyphicon glyphicon-trash"></i>', array('class' => 'btn btn-xs btn-danger', 'type' => 'submit', 'data-confirm' => 'Are you sure?'))) }}
        {{ Form::close() }}
        </td>
    </tr>
@empty
    <tr>
    	<td colspan="3">No tasks!</td>
    </tr>
@endforelse
</tbody>
</table>
@if (count($tasks) > 0)
    {{ $tasks->links() }}
@endif