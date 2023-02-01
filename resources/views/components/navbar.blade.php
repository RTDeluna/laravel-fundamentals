  <nav x-data="{ open: false }" class="bg-white px-2 sm:px-4 py-2.5 sticky w-full z-20 top-0 left-0 border-b border-gray-200 shadow-violet-300 shadow-lg">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <div class="flex items-center gap-1">
        <a href="/"><img class="content-start h-16 w-16" src="/img/logo.png"></a>
          <h1 class="block font-bold"><span class="text-orange-600">K</span><span class="text-blue-700">D</span><span class="text-cyan-500">G</span><span class="text-green-600">O</span></h1>
    </div>

      <button @click="open = !open"  data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-end p-2 text-sm text-orange-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-50" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>

    {{-- Navbar Items --}}
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <x-nav-items />
    </div>
    {{-- Mobile View --}}
    <div  x-show="open" class="flex justify-between w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <x-nav-items />
    </div>
  </div>
</nav>

