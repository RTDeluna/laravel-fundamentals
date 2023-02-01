@include('partials.header')
<x-navbar />

<header class="max-w-lg mx-auto my-8">
  <a href="#">
    <h1 class="text-4xl font-bold  text-center">Student List</h1>
  </a>
</header>

<section class="flex justify-evenly sm:static  mb-5 ">
    <form class="content-start" action="/" method="GET">
        <label for="sort">Sort by:</label>
        <select class="px-3 py-1 rounded-full bg-violet-500 text-white" name="order">
            <option value="asc">A-Z</option>
            <option value="desc">Z-A</option>
        </select>
        <button type="submit" class="px-3 py-1 bg-violet-500 rounded-full text-white"
        value="age" name="sort"
        >Age</button>
        <button type="submit" class="px-3 py-1 bg-violet-500 rounded-full text-white"
        value="first_name" name="sort">First Name</button>
        <button type="submit" class="px-3 py-1 bg-violet-500 rounded-full text-white"
        value="last_name" name="sort"
        >Last Name</button>
        <button type="submit" class="px-3 py-1 bg-violet-500 rounded-full  text-white"
        value="created_at" name="sort"
        >Created At</button>
    </form>
    <form action="/" class="flex" role="search">
        <input type="search" class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-l-full transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" name='student' id='student' >
        <button class="px-6 py-2.5 bg-violet-600 text-white font-medium text-xs leading-tight uppercase rounded-r-full shadow-md hover:bg-violet-700 hover:shadow-lg focus:bg-violet-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-violet-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="submit" id="button-addon2">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
</section>

{{-- add new student --}}
<div x-data='{createModalOpen: false}'>
    <button @click='createModalOpen = !createModalOpen' class="border-2 animate-bounce border-green-800 bg-green-500 w-14 h-14 rounded-full fixed bottom-12 right-7 z-20 flex justify-center items-center hover:bg-gray-100 hover:border-green-600 hover:cursor-pointer  hover:duration-200 transition ease-in group" >
        <i class="fa-solid fa-user-plus text-2xl text-gray-100 group-hover:text-green-500 "></i>
    </button>
    <x-create-modal />
</div>


<section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 2xl:grid-cols-3 gap-4 lg:gap-8 w-4/5 mx-auto">
  @foreach ($data as $item)
    <div x-data='{deleteModalOpen: false, editModalOpen :false}' class="flex rounded-lg shadow-lg bg-white min-w-sm justify-items-center items-center h-40 border-2">
      {{-- DIV FOR PROFILE IMAGE --}}
      <div class="pl-4">
        @if ($item->gender === 'Male')
        <img src="/img/male.png" class="w-28 h-28 rounded-full" alt="profile">
        @else
        <img src="/img/female.png" class="w-28 h-28 rounded-full" alt="profile">
        @endif
      </div>
      {{-- DIV FOR STUDENT INFO --}}
      <div class="w-4/5 px-4">
        <h5 class="text-gray-900 text-2xl leading-tight font-medium ">{{ $item->first_name }}  {{ $item->last_name }} </h5>
        <p class="text-gray-700 text-xs">{{ $item->email }}</p>

        <div class="flex items-center justify-between">
          <p class="text-gray-700 text-xs block h-4">{{ $item->gender }} | {{ $item->age }} years old  </p>

          <div>
            <button @click='editModalOpen = !editModalOpen'><i class="fa-regular fa-pen-to-square text-blue-600 text-lg self-end h-4 mr-2"></i></button>

            <button @click='deleteModalOpen = !deleteModalOpen' ><i class="fa-solid fa-trash-can text-lg text-rose-600 self-end h-4 mr-2 "></i></button>

          </div>
        </div>

      </div>
      <x-edit-modal :student="$item" />
      <x-delete-modal :student="$item" />
    </div>


  @endforeach
</section>
<div class="mx-auto max-w-lg pt-6 p-4">
  {{$data->links()}}
</div>



@include('partials.footer')
