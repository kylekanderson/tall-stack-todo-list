<div class="task-list mx-12">
    <div class="todo my-4">
        <h2 class="title font-bold text-md text-gray-600">TO-DO</h2>
        <ul class="border rounded-xl divide-y">
            @foreach ($tasks as $task)
                @if (!$task->completed)
                    @livewire('task', ['task' => $task], key($task->id))
                @endif
            @endforeach
        </ul>
    </div>
    <div class="completed my-4">
        <h2 class="title font-bold text-md text-gray-600">COMPLETED</h2>
        <ul class="border rounded-xl divide-y">
            @foreach ($tasks as $task)
                @if ($task->completed)
                    @livewire('task', ['task' => $task], key($task->id))
                @endif
            @endforeach
        </ul>
    </div>
</div>
