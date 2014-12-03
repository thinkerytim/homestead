<table class="table table-hover">
<thead>
	<td>ID</td>
	<td>Name</td>
	<td>Delete</td>
</thead>
<tbody>
@forelse($tasks as $task)
	<tr>
    	<td>{{{ $task->id }}}</td>
    	<td><a href="#">{{{ $task->name }}}</a></td>
    	<td><a href="#"><i id="{{ $task->id }}" class="glyphicon glyphicon-trash task-delete"></i></a></td>
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