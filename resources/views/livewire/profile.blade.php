<div>
<!-- component -->
<!-- This is an example component -->
<div class="w-11/12">
    <div class="items-center justify-center text-center mt-3 mx-auto pb-10">
            <div class="ml-10">
                <h2 class="block leading-relaxed font-light text-gray-700 text-3xl">{{ Auth::user()->name }} </h2>
                <h2 class="block leading-relaxed font-light text-gray-700 text-2xl">{{ Auth::user()->email }}</h2>

            </div>
    </div>
    <div > 
    <livewire:todo-task /></div>
</div>
</div>
