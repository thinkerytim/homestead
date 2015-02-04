<table class="table table-hover">
<thead>
	<td>ID</td>
	<td>Title</td>
    <td>MLS ID</td>
    <td>Delete</td>
</thead>
<tbody>
@forelse($tours as $tour)
	<tr id="row{{ $tour->id }}">
    	<td>{{{ $tour->id }}}</td>
        <td><a href="{{ action('ToursController@show', array($tour->id)) }}">{{{ $tour->title }}}</a></td>
    	<td>{{ $tour->listing_id }}</td>
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