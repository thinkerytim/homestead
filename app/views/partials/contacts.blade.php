<table class="table table-hover">
<thead>
	<td>Name</td>
	<td>Title</td>
    <td>Company</td>
    <td>Phone</td>
    <td>Mobile</td>
    <td>Email</td>
</thead>
<tbody>
@forelse($contacts as $contact)
	<tr id="row{{ $contact->id }}">
    	<td>{{{ $contact->id }}}</td>
        <td><a href="{{ action('ContactsController@show', array($contact->id)) }}">{{{ $contact->title }}}</a></td>
    	<td>{{ $contact->listing_id }}</td>
    	<td>
        {{ Form::open(['data-remote', 'method' => 'DELETE', 'action' => ['ContactsController@destroy', $contact->id] ]) }}
            {{ HTML::decode(Form::button('<i class="glyphicon glyphicon-trash"></i>', array('class' => 'btn btn-xs btn-danger', 'type' => 'submit', 'data-confirm' => 'Are you sure?'))) }}
        {{ Form::close() }}
        </td>
    </tr>
@empty
    <tr>
    	<td colspan="4">No contacts!</td>
    </tr>
@endforelse
</tbody>
</table>
@if (count($contacts) > 0)
    {{ $contacts->links() }}
@endif