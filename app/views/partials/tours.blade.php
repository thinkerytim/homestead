<table class="table table-hover">
<thead>
	<td>ID</td>
    <td>MLS ID</td>
    <td>Notes</td>
    <td>Published</td>
    <td>Delete</td>
</thead>
<tbody>
@forelse($tours as $tour)
	<tr id="row{{ $tour->id }}">
    	<td>{{{ $tour->id }}}</td>
        <td>{{ $tour->listing_id }}</td>
        <td>{{ $tour->notes }}</td>
    	<td>{{ $tour->present()->isPublished }}</td>
    	<td>
        {{ Form::open(['data-remote', 'method' => 'DELETE', 'action' => ['ToursController@destroy', $tour->id] ]) }}
            {{ HTML::decode(Form::button('<i class="glyphicon glyphicon-trash"></i>', array('class' => 'btn btn-xs btn-danger', 'type' => 'submit', 'data-confirm' => 'Are you sure?'))) }}
        {{ Form::close() }}
        </td>
    </tr>
@empty
    <tr>
    	<td colspan="5">No tours!</td>
    </tr>
@endforelse
</tbody>
</table>
@if (count($tours) > 0)
    {{ $tours->links() }}
@endif