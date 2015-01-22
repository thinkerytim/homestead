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
    	<td><a href="{{ action('TasksController@show', array($task->id)) }}">{{{ $task->name }}}</a></td>
    	<td><a href="#"><i id="{{ $task->id }}" class="glyphicon glyphicon-trash list-delete" data-action="task"></i></a></td>
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