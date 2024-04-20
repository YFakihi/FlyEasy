@extends('layouts.app')

@section('title', 'Home')
@section('content')

<section
  class="ezy__epprofile1 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white relative overflow-hidden z-10"
>
  <div class="container px-4 mx-auto">
    <div class="flex flex-col md:flex-row gap-6">
      <!-- sidebar -->
      <div class="w-full md:w-1/3">
        <div class="bg-white dark:bg-slate-800 shadow-xl py-6">
          <h5 class="text-xl font-bold mx-4 mb-4">Account</h5>

          <ul class="flex flex-wrap flex-col">
            <li
              class="px-4 py-2 opacity-80 border-l-4 border-blue-600 hover:text-blue-600 bg-gray-200 dark:bg-slate-900"
            >
              <a href="#!">Overview</a>
            </li>
            <li
              class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer"
            >
              <a href="#!">Orders</a>
            </li>
            <li
              class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer"
            >
              <a href="#!">Payment</a>
            </li>
   
            <li
              class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer"
            >
              <a href="#!">Setting</a>
            </li>

            <hr class="my-2 mx-4 opacity-60 dark:opacity-10" />

         
   
          </ul>
        </div>

      
      </div>

      <!-- profile -->
      <div class="w-full md:w-2/3">
        <div class="bg-white dark:bg-slate-800 shadow-xl p-6">
          <div class="flex items-center">
            <img
              src="https://cdn.easyfrontend.com/pictures/team/team_square_3.jpeg"
              alt=""
              width="70"
              height="70"
              class="rounded-full"
            />
            <h6 class="text-[22px] font-bold ml-4">{{auth()->user()->name}}</h6>
          </div>

     
        </div>

        <div class="bg-white dark:bg-slate-800 shadow-xl p-6 mt-4">
          <div class="flex items-center justify-between">
            <h6 class="text-[22px] font-bold ml-4">Mes Reservation</h6>
       
          </div>


        </div>
      </div>
    </div>
  </div>
</section>
@endsection
