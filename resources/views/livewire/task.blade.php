<div>

        <div class="flex mb-4 items-center">
        @if ($edit)
        <div class="flex">
  
        <input
        wire:model="name"
          type="text"
          placeholder=""
          id=""
          class="border-b-1 border focus:outline-none ml-1 bg-transparent"
        />
    </div>
                @else
                    <div class="w-full text-grey-darkest 
                @if($isDone) 
                    line-through
                @endif">{{$task->name}} <span class="text-sm text-gray-400 ml-8">{{$task->created_at}}</span> </div>
                @endif
               
                 @if ($edit)
                     <button
                wire:click="update"
                 class="flex-no-shrink p-2 ml-2 border-2 rounded text-gray-500 border-gray-500 hover:text-gray-400 hover:bg-gray">
                 Update
                 </button>
                @else
                  <button
                wire:click="edit"
                 class="flex-no-shrink p-2 ml-2 border-2 rounded text-gray-500 border-gray-500 hover:text-gray-400 hover:bg-gray">
                 Edit
                 </button>
                @endif

    
                <button 
                wire:click='toggle'
                class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-green-400 text-green-500 border-green-500">
                @if ($isDone)
                     Not Done
                @else
                    Done
                @endif
                </button>
                
                <button
                wire:click="delete"
                 class="flex-no-shrink p-2 ml-2 border-2 rounded text-red-500 border-red-500 hover:text-red-400 hover:bg-red">Remove</button>
            </div>
        </div>
