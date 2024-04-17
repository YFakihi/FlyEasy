
@extends('layouts.app')

@section('title', 'Home')
@section('content')
<div class="font-[sans-serif]">
    <div class="grid lg:grid-cols-3 gap-12 p-6">
      <div class="lg:col-span-2 bg-white divide-y">
                       @foreach ($booking as $reservation)
        <div class="flex items-start max-sm:flex-col gap-8 py-6">
          <div class="h-52 shrink-0">
            <img src='{{asset('images/fast_track_vip_cmn.jpg')}}' class="w-full h-full object-contain rounded-md" />
          </div>
          <div class="flex items-start gap-6 max-md:flex-col w-full">
            <div class="overflow-y-auto max-h-[400px]">
              <div>
                <h3 class="text-xl font-extrabold text-[#333] mb-6">{{$reservation->user->name}}</h3>
                <div>   
                  <h6 class="text-md text-gray-500">Airport: <strong class="ml-2">{{$reservation->airport->name}}</strong></h6>

                  <h6 class="text-md text-gray-500 mt-2">Prix: <strong class="ml-2">{{ $reservation->service ? $reservation->service->price : 'N/A' }}</strong></h6>
                  <h6 class="text-md text-gray-500 mt-2">Time:<strong class="ml-2">{{$reservation->time}}</strong></h6>
                </div>
                <div class="mt-6 flex flex-wrap gap-6">
                  <a href="{{route('remove_cart',['id' => $reservation->id])}}" class="font-semibold text-gray-500 text-sm flex items-center gap-2 shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-current inline" viewBox="0 0 24 24">
                      <path d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z" data-original="#000000"></path>
                      <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" data-original="#000000"></path>
                    </svg>
                    Remove
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
      <div class="shadow-md p-6">
        <h3 class="text-xl font-extrabold text-[#333] border-b pb-4">Order Summary</h3>
        <ul id="orderItems" class="text-[#333] divide-y mt-6">
          <li class="flex flex-wrap gap-4 text-md py-4 font-bold">Total <span id="totalPrice" class="ml-auto">${{ $totalPrice }}</span></li>
      </ul>
        <button type="button" class="mt-6 text-md px-6 py-2.5 w-full bg-blue-600 hover:bg-blue-700 text-white rounded">Check
          out</button>
       </div>
    </div>
  </div>

  @endsection