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
    	<td><a href="#"><i class="glyphicon glyphicon-trash"></i></a></td>
    </tr>
@empty
    <tr>
    	<td colspan="3">No closings!</td>
    </tr>
@endforelse
</tbody>
</table>
@if (count($tasks) > 0)
    {{ $tasks->links() }}
@endif