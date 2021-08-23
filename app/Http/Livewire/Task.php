<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Task extends Component
{
    public $task;
    public $isDone;
    public $edit;
    public $name = '';

    public function mount(\App\Models\Task $task){
     $this->task = $task;
     $this->name = $this->task->name;
     $this->isDone = $this->task->is_done;
    }
    public function edit(){
        $this->edit = !$this->edit; 
    }
    public function update(){
       $this->task->name = $this->name;
       $this->task->save();
       $this->edit = !$this->edit; 
    }
    public function toggle(){
        $this->isDone = !$this->isDone; 
        $this->task->is_done = $this->isDone;
        $this->task->save();
    }
    public function delete(){
        $this->task->delete();
        $this->emit('taskDeleted');
    }
    public function render()
    {
        return view('livewire.task'); 
    }
}
