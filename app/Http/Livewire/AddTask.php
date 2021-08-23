<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
// use App\Http\Livewire\Auth;
use Livewire\Component;

class AddTask extends Component
{
    public $name;

    public function addTask(){
        $this->validate([
            'name' => 'required',
        ]);

        $task = new \App\Models\Task();
        $task->name = $this->name;
        $task->fullname = Auth::user()->name;
        $task->save();
        $this->emit('taskAdded');
        $this->reset();
        $this->emit('taskAdded');
    }
    public function render()
    {
        return view('livewire.add-task');
    }
}
