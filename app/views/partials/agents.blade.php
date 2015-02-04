<table class="table table-hover">
<thead>
	<td>ID</td>
	<td>Name</td>
	<td>Email</td>
	<td>Closings</td>
</thead>
<tbody>
@forelse($agents as $agent)
	<tr id="row{{ $agent->id }}">
    	<td>{{{ $agent->id }}}</td>
    	<td><a href="{{ action('AgentsController@show', array($agent->id)) }}">{{{ $agent->firstname }}} {{{ $agent->lastname }}}</a></td>
        <td>{{{ $agent->email }}}</td>
    	<td>{{ $agent->closings->count() }}</td>
    	<td>
        {{ Form::open(['data-remote', 'method' => 'DELETE', 'action' => ['AgentsController@destroy', $agent->id] ]) }}
            {{ HTML::decode(Form::button('<i class="glyphicon glyphicon-trash"></i>', array('class' => 'btn btn-xs btn-danger', 'type' => 'submit', 'data-confirm' => 'Are you sure?'))) }}
        {{ Form::close() }}
        </td>
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