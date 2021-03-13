<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Task extends Component
{
    public $task;
    public $completed;
    public $description;
    public $disableInput;
    protected $rules = [
        'description' => 'required|min:1',
    ];

    public function mount(\App\Models\Task $task)
    {
        $this->task = $task;
        $this->description = $task->description;
        $this->disableInput = true;
    }

    public function render()
    {
        return view('livewire.task');
    }

    public function complete()
    {
        // set the task to completed
        $this->completed = true;
        $this->task->completed = true;
        $this->task->save();

        // emit an event up to the parent component to refresh the task list
        $this->emit('taskCompleted');
    }

    public function updateDescription($description)
    {
        $this->validateOnly($description);

        // update the component's description
        $this->task->description = $description;
        $this->task->save();

        // disable the input field after updating
        $this->disableInput = true;
    }
}
