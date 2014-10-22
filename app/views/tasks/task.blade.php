@if (Carbon::parse($task->pivot->due_at)->lte(Carbon::now()))
    <?php 
    	// OVERDUE!
    	$style 	= 'danger'; 
    	$icon	= '<span class="glyphicon glyphicon-exclamation-sign"></span>';
    	$text	= $task->name;
	?>
@elseif (Carbon::parse($task->pivot->due_at)->between(Carbon::now(), Carbon::now()->addDays(3)))
    <?php 
    	// GETTING CLOSE!
    	$style 	= 'warning'; 
    	$icon	= '<span class="glyphicon glyphicon-exclamation-sign"></span>';
    	$text	= $task->name;
	?>
@else
    <?php
    	// LOOKING GOOD 
    	$style 	= ''; 
    	$icon	= '';
    	$text	= $task->name;
	?>
@endif

@if ($task->pivot->status == 1)
    <?php 
    	// COMPLETE
    	// now for finished tasks, undo the previous
    	$style 	= 'success'; 
    	$icon	= '<span class="glyphicon glyphicon-ok"></span>';
    	$text	= "<s>".$task->name."</s>";
	?>
@endif

<tr class="{{ $style }}">
	<td>{{ $icon }}</td>
	<td>{{ $text }}</td>
	<td>{{ Carbon::parse($task->pivot->due_at)->diffForHumans() }}</td>
	<td>{{ $task->pivot->due_at }}</td>
</tr>