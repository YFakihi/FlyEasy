@extends('layouts.app')

@section('title', 'Checkout')
@section('content')

<div class="font-sans">
    <div class="grid lg:grid-cols-3 gap-12 p-6">
        <div class="lg:col-span-2 bg-white divide-y">
@if ($bookings->isEmpty())
<div class="container mx-auto my-8 space-y-10 justify-center py-12 ml-52">


    <div class="max-w-4xl mx-auto px-10 py-4 bg-white rounded-lg shadow-lg">
        <div>
            <span class="bg-green-100 font-mono text-green-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300"> Empty State</span>
        </div>
        <div class="flex flex-col items-center justify-center py-12">
            <img src="https://cdn-icons-png.flaticon.com/128/907/907717.png" alt="Welcome Icon" class="w-24 h-24 mb-4">
            <p class="text-gray-600 text-center text-lg leading-relaxed">Start exploring the amazing features we have to offer:</p>
          
            <a href="{{route('booking')}}" class="mt-6 px-6 py-2 bg-blue-900 text-white rounded-md shadow-md hover:bg-blue-600">Get Started</a>
        </div>
    </div>
</div>


@endif
            @foreach ($bookings as $reservation)
            <div class="flex items-start max-sm:flex-col gap-8 py-6 mt-8">
                <div class="h-52 shrink-0">
                    <img src='{{asset('images/fast_track_vip_cmn.jpg')}}' class="w-full h-full object-contain rounded-md" />
                </div>
                {{-- <div class="flex items-start gap-6 max-md:flex-col w-full">
                    <div class="overflow-y-auto max-h-[400px]">
                        <div>
                            <h3 class="text-xl font-extrabold text-gray-800 mb-6">{{$reservation->user->name}}</h3>
                            <div>   
                                <h6 class="text-md text-gray-600">Airport: <strong class="ml-2">{{$reservation->airport->name}}</strong></h6>
                                <h6 class="text-md text-gray-600 mt-2">Price: <strong class="ml-2">{{ $reservation->service ? $reservation->service->price : 'N/A' }}</strong></h6>
                                <h6 class="text-md text-gray-600 mt-2">Time: <strong class="ml-2">{{$reservation->time}}</strong></h6>
                                <h6 class="text-md text-gray-600 mt-2">Total Price: <strong class="ml-2">${{ $reservation->totalPrice }}</strong></h6>
                            </div>
                            <div class="mt-6 flex flex-wrap gap-6">
                                <a href="{{route('remove_cart',['id' => $reservation->id])}}" class="font-semibold text-gray-600 text-sm flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-current inline" viewBox="0 0 24 24">
                                        <path d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z" data-original="#000000"></path>
                                        <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" data-original="#000000"></path>
                                    </svg>
                                    Remove
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}



              
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h1 class="text-lg font-semibold mb-4"><strong>Summary</strong> </h1>
                        <div class="flex justify-between mb-2">
                            <span><strong>Airport :</strong></span>
                            <span><strong class="ml-2">{{$reservation->airport->name}}</strong></span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span><strong>Price :</strong></span>
                            <span>${{ $reservation->service ? $reservation->service->price : 'N/A' }}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span><strong>Time :</strong> </span>
                            <span>  {{$reservation->time}}</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span><strong>Date :</strong> </span>
                            <span>{{$reservation->date}}</span>
                        </div>
                    
                        <hr class="my-2">
                        <div class="flex justify-between mb-2">
                            <span class="font-semibold"><strong>Total :</strong> </span>
                            <span class="font-semibold">${{ $reservation->totalPrice }}</span>
                        </div>

                        <div class="mt-6 flex flex-wrap gap-6">
                            <a href="{{route('remove_cart',['id' => $reservation->id])}}" class="font-semibold text-red-600 text-sm flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-current inline" viewBox="0 0 24 24">
                                    <path d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z" data-original="#000000"></path>
                                    <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z" data-original="#000000"></path>
                                </svg>
                                Remove
                            </a>
                        </div>

                        <form action="{{ route('session') }}" method="POST" id="checkout-form">
                            <input type="hidden" name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">
                            <input type="hidden" name="totalPrice" value="{{ $reservation->totalPrice }}">
                            <input type="hidden" name="bookingId" value="{{ $reservation->id }}">
                            @csrf
                        <button class="bg-blue-900 text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</button>
                       
                    </div>
             
            </div>

            {{-- <form action="{{ route('session') }}" method="POST" id="checkout-form">
                @csrf
                <h3 class="text-xl font-extrabold text-gray-800 border-b pb-4">Order Summary</h3>
                <input type="hidden" name="productname" value="Asus Vivobook 17 Laptop - Intel Core 10th">
                <input type="hidden" name="totalPrice" value="{{ $reservation->totalPrice }}">
                <input type="hidden" name="bookingId" value="{{ $reservation->id }}">
                <ul id="orderItems" class="text-gray-800 divide-y mt-6">
                    <li class="flex flex-wrap gap-4 text-md py-4 font-bold">Total <span id="totalPrice" class="ml-auto">${{ $reservation->totalPrice }}</span></li>
                </ul>        
                <button type="submit" class="mt-6 text-md px-6 py-2.5 w-full bg-blue-600 hover:bg-blue-700 text-white rounded">Checkout</button>
            </form> --}}
            @endforeach

        </div>
    </div>
</div>

@endsection