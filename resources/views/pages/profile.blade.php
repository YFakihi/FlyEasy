@extends('layouts.app')

@section('title', 'Home')
@section('content')

    <section
        class="ezy__epprofile1 light py-14 md:py-24 bg-white dark:bg-[#0b1727] text-zinc-900 dark:text-white relative overflow-hidden z-10">
        <div class="container px-4 mx-auto">
            <div class="flex flex-col md:flex-row gap-6">
                <!-- sidebar -->
                <div class="w-full md:w-1/3">
                    <div class="bg-white dark:bg-slate-800 shadow-xl py-6">
                        <h5 class="text-xl font-bold mx-4 mb-4">Account</h5>

                        <ul class="flex flex-wrap flex-col">
                            <li
                                class="px-4 py-2 opacity-80 border-l-4 border-blue-600 hover:text-blue-600 bg-gray-200 dark:bg-slate-900">
                                <a href="#!">Overview</a>
                            </li>
                            <li
                                class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer">
                                <a href="#!">Orders</a>
                            </li>
                            <li
                                class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer">
                                <a href="#!">Payment</a>
                            </li>

                            <li
                                class="px-4 py-2 opacity-80 hover:text-blue-600 hover:bg-gray-200 dark:hover:bg-slate-900 duration-500 cursor-pointer">
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
                          <img src="https://cdn.easyfrontend.com/pictures/team/team_square_3.jpeg" alt="" width="70" height="70" class="rounded-full" />
                          <h6 class="text-[22px] font-bold ml-4">{{ auth()->user()->name }}</h6>
                      </div>
              
                      <div class="bg-white dark:bg-slate-800 shadow-xl p-6 mt-4">
                          <div class="lg:grid-cols-1 gap-8">
                              <h6 class="text-[22px] font-bold ml-4">Mes Reservation</h6>
              
                              <div class="grid grid-cols-1 gap-8 mt-4">
                                  @foreach ($bookings as $reservation)
                                  <div class="flex items-start max-sm:flex-col gap-8 py-6">
                                      <div class="flex items-start gap-6 max-md:flex-col w-full">
                                        
                                          <div class="overflow-y-auto max-h-[400px]">
                                              <div class="h-52 shrink-0">
          

                                                  <h6 class="text-md text-gray-500">Airport: <strong class="ml-2">{{ $reservation->airport->name }}</strong></h6>
                                                  <h6 class="text-md text-gray-500 mt-2">Prix: <strong class="ml-2">{{ $reservation->service ? $reservation->service->price : 'N/A' }}</strong></h6>
                                                  <h6 class="text-md text-gray-500 mt-2">Time:<strong class="ml-2">{{ $reservation->time }}</strong></h6>
                                                  <h6 class="text-md text-gray-500 mt-2">date:<strong class="ml-2">{{ $reservation->date }}</strong></h6>
                                                  <h6 class="text-md text-gray-500 mt-2">Total Price:<strong class="ml-2">${{ $reservation->totalPrice }}</strong></h6>
                                              </div>
                                              <div class="mt-6 flex flex-wrap gap-6">
                                                <a href="{{ route('student.pdf', $reservation->id) }}" class="inline-flex items-center justify-center px-5 py-1  text-base font-normal text-center text-white rounded-lg bg-blue-900 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">Download Now</a>
                                                {{-- <svg class="w-6 h-6 text-white-800  dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V4M7 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2m-1-5-4 5-4-5m9 8h.01"/>
                                                    </svg> --}}
                                                    
                                                  </a>
                                            
                                                </div>
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
