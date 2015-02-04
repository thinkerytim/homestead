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
	<tr id="row{{ $closing->id }}">
    	<td>{{{ $closing->id }}}</td>
        <td><a href="{{ action('ClosingsController@show', array($closing->id)) }}">{{{ $closing->title }}}</a></td>
    	<td>{{ $closing->user->firstname }} {{ $closing->user->lastname }}</td>
    	<td>{{{ $closing->closes_at }}}</td>
    	<td>
        {{ Form::open(['data-remote', 'method' => 'DELETE', 'action' => ['ClosingsController@destroy', $closing->id] ]) }}
            {{ HTML::decode(Form::button('<i class="glyphicon glyphicon-trash"></i>', array('class' => 'btn btn-xs btn-danger', 'type' => 'submit', 'data-confirm' => 'Are you sure?'))) }}
        {{ Form::close() }}
        </td>
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