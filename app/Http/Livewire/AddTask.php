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
        $this->validate();
        $task = new \App\Models\Task();
        $task->description = $this->description;
        $task->save();

        $this->reset();

        $this->emit('taskAdded');
    }
}
