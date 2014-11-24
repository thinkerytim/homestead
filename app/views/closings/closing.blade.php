<tr>
	<td>{{ HTML::link('closings/show'.$closing->id, $closing->id) }}</td>
	<td>{{ link_to_action('ClosingsController@getShow', $closing->title, array('id' => $closing->id)) }}</td>
	<td>{{ $closing->tasks->count() }}</td>
	<td>{{ $closing->closes_at->toFormattedDateString() }}</td>
</tr>