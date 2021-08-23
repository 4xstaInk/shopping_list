<div>
<!-- Create Navbar Menu -->
<header class="bg-gray-100">
  <nav class="flex items-center justify-between p-6 h-20 bg-white shadow-sm">
    <a href="/" class="py-5 px-3 rounded-full bg-gradient-to-r from-indigo-700 to-blue-500 text-sm text-white font-semibold shadow-lg hover:cursor-pointer hover:shadow-lg">Home</a>
    <ul>
    @auth
       <li class="space-x-5 text-xl">
       <livewire:logout />
      </li>
    @endauth
    @guest
      <li class="space-x-5 text-xl">
        <a href="/login" class=" sm:inline-block text-gray-700 hover:text-indigo-700">Login</a>
        <a href="/register" class=" sm:inline-block text-gray-700 hover:text-indigo-700">Register</a>
      </li>
    @endguest
      
    </ul>
  </nav>
</header>
</div>
