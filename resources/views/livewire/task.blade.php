<div>
    <li class="flex flex-row flex-nowrap items-center @if ($task->completed) line-through @endif">
        <p class="w-11/12 py-2 pl-2">{{ $task->description }}</p>
        @if (!$task->completed)
            <input wire:click='complete' type="checkbox" class="rounded-sm">
        @endif
    </li>
</div>
