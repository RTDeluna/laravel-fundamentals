<ul class="flex flex-col p-4 mt-4  bg-white md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 ">

 @auth

  <li>
  <form action="/logout" method="POST">
    @csrf
    <button class="text-center py-2 pl-3 pr-4 font-semibold text-gray-50 bg-orange-400 rounded-full hover:bg-orange-500  hover:text-white md:hover:text-white-500">Logout</button>
  </form>
  </li>

  @endauth
</ul>
