<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Task extends Component
{
    public $task;
    public $completed;

    public function mount(\App\Models\Task $task)
    {
        $this->task = $task;
    }

    public function render()
    {
        return view('livewire.task');
    }

    public function complete()
    {
        $this->completed = !$this->completed;

        $this->task->completed = $this->completed;

        $this->task->save();
        $this->emit('taskCompleted');
    }
}
