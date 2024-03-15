<!-- layouts/nav.blade.php -->

<nav class="bg-blue-900 border-gray-200 dark:bg-gray-900">
  <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
    <div class="flex items-center space-x-6 rtl:space-x-reverse">
      <a href="tel:5541251234" class="text-sm  text-white dark:text-white hover:underline">+212 633249586 / +212 633249586  <span class="ml-2">fakihiyassin01@gmail.com</span></a>
    </div>
  </div>
</nav>

<nav>
  <div class="px-8 flex w-full z-40 bg-white-800 shadow-sm transition duration-300 ease-in-out" id="navbar">
    <div class="flex h-16 items-center justify-between w-full">
      <div class="flex items-center justify-start w-full sm:items-stretch sm:justify-between">
        <div class="sm:hidden">
          <!-- Hamburger menu icon for mobile -->
          <button id="menu-toggle" class="block text-gray-500 hover:text-white focus:outline-none focus:text-white">
            <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
              <path class="fill-current" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-5">
            <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
              <img src="{{asset("images/logo.png")}}" class="h-10" /> 
            </a>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
              <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                  <a href="#" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500" aria-current="page">Home</a>
                </li>
                <li>
                  <a href="{{route('about')}}" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                  <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 d:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                </li>
                <li>
                  <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="hidden sm:flex sm:flex-row gap-3">
          @guest
            <a type="button" href="{{route('login')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</a>

            <a type="button" href="{{route('register')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</a>
          @endguest
          @auth
            <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="document.getElementById('logoutform');" href="{{route('logout')}}">Logout</a>
            <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="#">Welcome {{auth()->user()->name}}</a>
            <form id="logoutform" action="{{route('logout')}}" method="post">
              @csrf
            </form>
          @endauth
        </div>
      </div>
    </div>
    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
      <!-- Right side content -->
    </div>
  </div>
</nav>

