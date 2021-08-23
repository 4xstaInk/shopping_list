<div>
@foreach ($tasks as $task)
@livewire('task',['task' => $task],key($task->id))    
@endforeach
{{$tasks->links()}} 
</div>
