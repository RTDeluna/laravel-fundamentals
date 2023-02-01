@include('partials.header')
{{-- Background - ABSOLUTE --}}
<div class=" absolute h-screen w-screen z-0 grid grid-flow-col grid-rows-2 grid-cols-3 gap-4 overflow-hidden">
  <div class="object-cover transform scale-110 -rotate-6 bg-gradient-to-br from-blue-500 to-pink-600 border-2 rounded-md">
  </div>
  <div class="object-cover col-start-3 transform scale-80 rotate-6 -translate-x-11 translate-y-40 bg-gradient-to-br from-yellow-500 to-orange-500 border-2 rounded-md">
  </div>

  <div class="object-cover transform translate-y-24 translate-x-32  -rotate-12 bg-gradient-to-br from-green-400 to-cyan-500 border-2 rounded-md">
  </div>
  <div class="object-cover row-start-1 col-start-2 col-span-2 scale-90 transform translate-x-36 translate-y-4 bg-gradient-to-br from-violet-500 to-cyan-500 border-2 rounded-md">

  </div>
</div>

<div class="py-40 z-10 relative">
  <header class="max-w-lg mx-auto">
    <a href="#">
      <h1 class="text-4xl font-bold  text-center">Admin <span class="">Login</span> </h1>
    </a>
  </header>

  <main class="w-4/5 md:max-w-lg mx-auto p-8 my-10 rounded-lg border-2 shadow-lg bg-gray-50">
    <section>
      <h3 class="font-bold text-2xl text-center">{{ $welcomeTitle }}</h3>
      <p class="text-gray-600 text-md pt-4"> Sign up to your account <a href="/register" class="font-semibold text-blue-700 hover:text-blue-800">here</a></p>
    </section>

    <section class="my-8">
      <form action="/login/process" method="POST" >
      @csrf
      @error('email')
        <p class="text-red-500 text-xs mt-2">
            {{$message}}
        </p>
      @enderror
        <div class="mb-6">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
          <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:blue-blue-500 block w-full p-2.5 " placeholder="example@email.com" required >
        </div>
        <div class="mb-6">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
          <input type="password" id="password" name="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
        </div>

        <button type="submit" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orange-300 font-semibold rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
      </form>

    </section>
  </main>
</div>


  @include('partials.footer')
