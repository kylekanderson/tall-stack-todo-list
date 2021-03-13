<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddTask extends Component
{
    public $description;

    protected $rules = [
        'description' => 'required|min:1',
    ];

    public function render()
    {
        return view('livewire.add-task');
    }

    public function submit()
    {
        // validate and save the updated task
        $this->validate();
        $task = new \App\Models\Task();
        $task->description = $this->description;
        $task->save();

        // reset the field content
        $this->reset();

        // emit an event to the parent component to refresh the task list
        $this->emit('taskAdded');
    }
}
