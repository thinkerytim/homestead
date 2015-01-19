<tr>
	<td>{{{ $message->from_id->first_name }}}</td>
	<td><a href="{{ action('AgentsController@show', array($agent->id)) }}">{{{ $agent->firstname }}} {{{ $agent->lastname }}}</a></td>
    <td>{{{ $agent->email }}}</td>
	<td>#closings</td>
	<td><a href="#"><i class="glyphicon glyphicon-trash"></i></a></td>
</tr>