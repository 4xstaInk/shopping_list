<div>
   <div>
<div class="overflow-hidden relative flex items-center min-h-screen">
  <div class="absolute bg-gradient-to-tr text-center  from-yellow-400 via-red-500 to-pink-500 w-full h-1/2 z-0 top-0" style="border-bottom-left-radius: 50% 20%; border-bottom-right-radius: 50% 20%;">
  </div>
  <div class="absolute text-center  text-5xl top-1 text-center ml-15">

  </div>
  <div class="absolute inset-x-auto w-full z-10">
    <div class="w-2/3 mx-auto shadow-md rounded-md p-4 bg-white">
 <h1 class="text-3xl text-black-500 font-light" style="text-align: center">  
  SHOPPING  LIST 
  </h1>
  <hr/>
  <h1
   class="text-1xl text-black-500"
  >Get started:</h1>
  <br/>
     <div>
     @guest
      <a
                href="/register"
                 class="flex-no-shrink p-2 mb-2 border-2 rounded text-black-500 border-black-500 hover:text-black-400 hover:bg-red">Register</a>
                  <a
                href="/login"
                 class="flex-no-shrink p-2 mb-2 ml-2  mr-2  border-2 rounded text-black-500 border-black-500 hover:text-black-400 ">Login</a>
     @endguest
     @auth
      <a href="/profile"
                wire:click="delete"
                 class="flex-no-shrink p-2 mb-2 border-2 rounded text-black-500 border-black-500 hover:text-black-400 hover:bg-red">Go to profile</a>
     @endauth
              
     </div>
      <div class="flex gap-2 flex-col md:flex-row center">
        <div class="relative self-center">
        </div>
        <div></div>
      </div>

    </div>
  </div>
</div>
</div>

</div>

