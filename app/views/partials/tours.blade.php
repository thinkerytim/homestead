<table class="table table-hover">
<thead>
	<td>ID</td>
    <td>MLS ID</td>
    <td>Published</td>
    <td>Delete</td>
</thead>
<tbody>
@forelse($tours as $tour)
	<tr id="row{{ $tour->id }}">
    	<td>{{{ $tour->id }}}</td>
        <td>{{ $tour->listing_id }}</td>
    	<td>{{ $tour->published }}</td>
    	<td>
        {{ Form::open(['data-remote', 'method' => 'DELETE', 'action' => ['ToursController@destroy', $tour->id] ]) }}
            {{ HTML::decode(Form::button('<i class="glyphicon glyphicon-trash"></i>', array('class' => 'btn btn-xs btn-danger', 'type' => 'submit', 'data-confirm' => 'Are you sure?'))) }}
        {{ Form::close() }}
        </td>
    </tr>
@empty
    <tr>
    	<td colspan="4">No tours!</td>
    </tr>
@endforelse
</tbody>
</table>
@if (count($tours) > 0)
    {{ $tours->links() }}
@endif