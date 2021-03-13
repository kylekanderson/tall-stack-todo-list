<div class="task-list mx-12">
    <div class="todo my-4">
        <h2 class="title font-medium text-md text-custom-darkest-gray">TO-DO</h2>
        <ul class="border rounded-xl divide-y">
            @foreach ($tasks as $task)
                @if (!$task->completed)
                    <li>
                        @livewire('task', ['task' => $task], key($task->id))
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    <div class="completed my-4">
        <h2 class="title font-medium text-md text-custom-darkest-gray">COMPLETED</h2>
        <ul class="border rounded-xl divide-y">
            @foreach ($tasks as $task)
                @if ($task->completed)
                    <li>
                        @livewire('task', ['task' => $task], key($task->id))
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
