<div>
<div class="mb-4">
            <h1 class="text-grey-darkest">Shopping List</h1>
            <div class="mt-4">
            <form wire:submit.prevent="addTask" class="flex">
             <input 
             wire:model="name"
             class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 focus:outline-none focus:shadow-outline text-grey-darker" placeholder="Type here what's on your mind?">
                <button 
                type="submit"
                class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-gray-500 hover:bg-teal">Add</button>
            </form>
                <br/>
                @error('name') <span class="text-red-500 border border-red-400 px-2 pb-1 mt-3 bg-red-100 rounded-lg">{{$message}}</span> @enderror
            </div>
        </div>
</div>
