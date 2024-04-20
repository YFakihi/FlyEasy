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
              <a href="#!">Refund & Return</a>
            </li>
            <li
              class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer"
            >
              <a href="#!">Feedback</a>
            </li>
            <li
              class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer"
            >
              <a href="#!">Setting</a>
            </li>

            <hr class="my-2 mx-4 opacity-60 dark:opacity-10" />

            <li
              class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer"
            >
              <a href="#!">Invite friends</a>
            </li>

            <hr class="my-2 mx-4 opacity-60 dark:opacity-10" />

            <li
              class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer"
            >
              <a href="#!">Help Center</a>
            </li>
            <li
              class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer"
            >
              <a href="#!">Manage reports</a>
            </li>
            <li
              class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer"
            >
              <a href="#!">Suggestion</a>
            </li>
            <li
              class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer"
            >
              <a href="#!">DS center</a>
            </li>
          </ul>
        </div>

        <div
          class="bg-white dark:bg-slate-800 shadow-xl d-flex flex-column text-center p-6 px-4 md:px-6 mt-6"
        >
          <h6 class="text-lg leading-none mb-1">EZY Mobile App</h6>
          <p class="text-sm opacity-50 mb-0">Search Anywhere, Anytime!</p>
          <a href="#!">
            <img
              src="https://cdn.easyfrontend.com/pictures/qr-code.png"
              alt=""
              class="max-w-full h-auto mx-auto"
            />
          </a>
          <a href="#!" class="text-sm hover:text-blue-600 opacity-75"
            >Search or click to download</a
          >
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
            <h6 class="text-[22px] font-bold ml-4">Shafayetur Rahman</h6>
          </div>

          <div class="grid grid-cols-4 gap-6 mt-6">
            <div class="col-span-2 sm:col-span-1 text-center">
              <a href="" class="group">
                <div
                  class="mb-2 text-3xl opacity-25 group-hover:text-blue-600 group-hover:opacity-100 duration-500"
                >
                  <i class="fas fa-heart"></i>
                </div>
                <p class="text-[17px]">Wish List</p>
              </a>
            </div>

            <div class="col-span-2 sm:col-span-1 text-center">
              <a href="" class="group">
                <div
                  class="mb-2 text-3xl opacity-25 group-hover:text-blue-600 group-hover:opacity-100 duration-500"
                >
                  <i class="fas fa-users"></i>
                </div>
                <p class="text-[17px]">Following</p>
              </a>
            </div>

            <div class="col-span-2 sm:col-span-1 text-center">
              <a href="" class="group">
                <div
                  class="mb-2 text-3xl opacity-25 group-hover:text-blue-600 group-hover:opacity-100 duration-500"
                >
                  <i class="fas fa-clock"></i>
                </div>
                <p class="text-[17px]">Viewed</p>
              </a>
            </div>

            <div class="col-span-2 sm:col-span-1 text-center">
              <a href="" class="group">
                <div
                  class="mb-2 text-3xl opacity-25 group-hover:text-blue-600 group-hover:opacity-100 duration-500"
                >
                  <i class="fas fa-id-card"></i>
                </div>
                <p class="text-[17px]">Coupons</p>
              </a>
            </div>
          </div>
        </div>

        <div class="bg-white dark:bg-slate-800 shadow-xl p-6 mt-4">
          <div class="flex items-center justify-between">
            <h6 class="text-[22px] font-bold ml-4">My Orders</h6>
            <a
              href="#!"
              class="opacity-50 ml-2 small hover:text-blue-600 hover:opacity-100"
              >View All <i class="fas fa-chevron-right"></i
            ></a>
          </div>

          <hr class="my-5 mx-4 opacity-60 dark:opacity-10" />

          <div class="grid grid-cols-4 gap-6 my-6">
            <div class="col-span-2 sm:col-span-1 text-center">
              <a href="#!">
                <div class="text-4xl text-blue-600 mb-4">
                  <i class="fas fa-wallet"></i>
                </div>
                <p class="text-[17px]">Unpaid</p>
              </a>
            </div>

            <div class="col-span-2 sm:col-span-1 text-center">
              <a href="#!">
                <div class="text-4xl text-blue-600 mb-4">
                  <i class="fas fa-gift"></i>
                </div>
                <p class="text-[17px]">To Be Shipped</p>
              </a>
            </div>

            <div class="col-span-2 sm:col-span-1 text-center">
              <a href="#!">
                <div class="text-4xl text-blue-600 mb-4">
                  <i class="fas fa-shipping-fast"></i>
                </div>
                <p class="text-[17px]">Shipped</p>
              </a>
            </div>

            <div class="col-span-2 sm:col-span-1 text-center">
              <a href="#!">
                <div class="text-4xl text-blue-600 mb-4">
                  <i class="fas fa-calendar-check"></i>
                </div>
                <p class="text-[17px]">To Be Reviewed</p>
              </a>
            </div>
          </div>

          <hr class="my-5 mx-4 opacity-60 dark:opacity-10" />

          <a
            href="#!"
            class="flex items-center justify-between hover:text-blue-600 w-full"
          >
            <div class="flex items-center justify-between px-4 w-full">
              <div class="flex items-center opacity-75">
                <i class="fas fa-receipt"></i>
                <p class="mb-0 ml-2">My Appeal</p>
              </div>
              <i class="fas fa-chevron-right text-xl"></i>
            </div>
          </a>

          <hr class="my-5 mx-4 opacity-60 dark:opacity-10" />

          <a
            href="#!"
            class="flex items-center justify-between hover:text-blue-600 w-full"
          >
            <div class="flex items-center justify-between px-4 w-full">
              <div class="flex items-center opacity-75">
                <i class="fas fa-dollar"></i>
                <p class="mb-0 ml-2">In dispute</p>
              </div>
              <i class="fas fa-chevron-right text-xl"></i>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
