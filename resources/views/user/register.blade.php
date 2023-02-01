@include('partials.header')
{{-- BACKGROUND --}}
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

<div class="py-20 z-10 relative">
  <header class="max-w-lg mx-auto max mt-auto ">
    <a href="#">
      <h1 class="text-4xl font-bold  text-center">Admin Registration</h1>
    </a>
  </header>

  <main class="w-4/5 md:max-w-lg mx-auto p-8 my-10 rounded-lg border-2 shadow-lg bg-gray-50">
    <section>
      <h3 class="font-bold text-2xl text-center">{{ $welcomeTitle }}</h3>
      <p class="text-gray-600 text-md pt-4"> Sign in to your account <a href="/login" class="font-semibold text-blue-700 hover:text-blue-800">here</a></p>
    </section>

    <section class="my-8">
      <form>
        @csrf
        <div class="mb-6">
          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Your Name</label>
          <div class="flex gap-2">
            <input type="text" id="firstName" name="firstName" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 " placeholder="First Name" required>
            <input type="text" id="lastName" name="lastName" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 " placeholder="Last Name" required>
            @error('name')
                  <p class="text-red-500 text-xs mt-2">
                      {{$message}}
                  </p>
               @enderror
          </div>
        </div>

        <div class="mb-6">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
          <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="example@email.com"  required>
          @error('email')
          <p class="text-red-500 text-xs mt-2">
              {{$message}}
          </p>
       @enderror
        </div>


        <div class="mb-6">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
          <input type="password" id="password" name="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
          @error('password')
          <p class="text-red-500 text-xs mt-2">
              {{$message}}
          </p>
       @enderror
        </div>
        <div class="mb-6">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Confirm password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
          @error('password_confirmation')
          <p class="text-red-500 text-xs mt-2">
              {{$message}}
          </p>
       @enderror
        </div>
{{--
        <div class="flex items-start mb-6">
          <div class="flex items-center h-5">
            <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required>
          </div>
          <label for="terms" class="ml-2 text-sm font-medium text-gray-900 ">I agree with the <a href="#" class="text-blue-600 hover:underline">terms and conditions</a></label>
        </div> --}}

        <button type="submit" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-orang-300 font-semibold rounded-lg text-sm px-5 py-2.5 text-center">Register new account</button>
      </form>

    </section>
  </main>
</div>


@include('partials.footer')
