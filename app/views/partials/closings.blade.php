<table class="table table-hover">
<thead>
	<td>ID</td>
	<td>Title</td>
	<td>Closes at</td>
	<td>Delete</td>
</thead>
<tbody>
@forelse($closings as $closing)
	<tr>
    	<td>{{{ $closing->id }}}</td>
    	<td><a href="#">{{{ $closing->title }}}</a></td>
    	<td>{{{ $closing->closes_at }}}</td>
    	<td><a href="#"><i class="glyphicon glyphicon-trash"></i></a></td>
    </tr>
@empty
    <tr>
    	<td colspan="3">No closings!</td>
    </tr>
@endforelse
</tbody>
</table>
@if (count($closings) > 0)
    {{ $closings->links() }}
@endif