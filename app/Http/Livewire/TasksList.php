<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class TasksList extends Component
{
    // public $tasks;
    use WithPagination;
    
    protected $listeners =[
        'taskDeleted' => 'render',
        'taskAdded' => 'render',
    ];

    public function mount(){
        // $fullname = Auth::user()->name;
        // $this->tasks = Task::all()->where('fullname','=',$fullname);
    }
    public function refreshTasks(){
        $this->tasks = $this->tasks->fresh();
    }
    public function render()
    {
        return view('livewire.tasks-list',[
            'tasks' => Task::latest()->where('fullname','=',Auth::user()->name)->paginate(3)
        ]);
    }
}
