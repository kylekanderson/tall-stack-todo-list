<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskList extends Component
{
    public $tasks;
    protected $listeners = [
        'taskCompleted' => 'refreshTasks',
        'taskAdded' => 'refreshTasks'
    ];

    public function mount()
    {
        $this->tasks = \App\Models\Task::all();
    }

    public function tasks()
    {
        return \App\Models\Task::all();
    }

    public function render()
    {
        return view('livewire.task-list');
    }

    public function refreshTasks()
    {
        $this->tasks = \App\Models\Task::all();
    }
}
