<table class="table table-hover">
<thead>
	<td>ID</td>
	<td>Title</td>
    <td>Agent</td>
	<td>Closes at</td>
	<td>Delete</td>
</thead>
<tbody>
@forelse($closings as $closing)
	<tr>
    	<td>{{{ $closing->id }}}</td>
        <td><a href="{{ action('ClosingsController@show', array($closing->id)) }}">{{{ $closing->title }}}</a></td>
    	<td>{{ $closing->user->firstname }} {{ $closing->user->lastname }}</td>
    	<td>{{{ $closing->closes_at }}}</td>
    	<td><a href="#"><i id="{{ $closing->id }}" class="glyphicon glyphicon-trash list-delete" data-action="closings"></i></a></td>
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