@if (Carbon::parse($task->pivot->due_at) < Carbon::now())
    <?php $style = 'list-group-item-danger'; ?>
@elseif (Carbon::parse($task->pivot->due_at) > Carbon::now())
    <?php $style = 'list-group-item-success'; ?>
@else
    <?php $style = ''; ?>
@endif
<li class="list-group-item {{ $style }}">
	{{ $task->name }}
</li>