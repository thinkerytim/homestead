<table class="table table-hover">
<thead>
	<td>ID</td>
	<td>Name</td>
	<td>Email</td>
	<td>Closings</td>
</thead>
<tbody>
@forelse($agents as $agent)
	<tr>
    	<td>{{{ $agent->id }}}</td>
    	<td><a href="{{ action('AgentsController@show', array($agent->id)) }}">{{{ $agent->firstname }}} {{{ $agent->lastname }}}</a></td>
        <td>{{{ $agent->email }}}</td>
    	<td>#closings</td>
    	<td><a href="#"><i class="glyphicon glyphicon-trash"></i></a></td>
    </tr>
@empty
    <tr>
    	<td colspan="3">No agents!</td>
    </tr>
@endforelse
</tbody>
</table>
@if (count($agents) > 0)
    {{ $agents->links() }}
@endif