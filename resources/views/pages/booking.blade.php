
@extends('layouts.app')

@section('title', 'Home')
@section('content')

<div class="container mx-auto px-4 py-8">
  <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
      <div class="px-6 py-4">
          <h2 class="text-2xl font-semibold text-gray-800 mb-2">Book a Ride</h2>
          <form action="{{ route('booking/create') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-600 font-semibold mb-2">Airport Services</label>
                <div>
                    <label for="service_type_arrival" class="inline-flex items-center">
                        <input type="radio" id="service_type_arrival" name="service_type" value="arrival_fast_track" class="form-radio">
                        <span class="ml-2">Fast track Arrivée</span>
                    </label>
                    <label for="service_type_departure" class="inline-flex items-center ml-6">
                        <input type="radio" id="service_type_departure" name="service_type" value="departure_fast_track" class="form-radio">
                        <span class="ml-2">Fast track Départ</span>
                    </label>
                </div>
                @error('service_type')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="mb-4">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Airports</label>
                <select id="airport" name="airport_id" class="bg-gray-0 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected disabled>Select Airport</option>
                    @foreach ($airports as $airport)
                        <option value="{{ $airport->id }}">{{ $airport->name }}</option>
                    @endforeach
                </select>
                @error('airport_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="mb-4">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of Service</label>
                <select id="fast_track_service" name="fast_track_service_id" class="bg-gray-0 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    <option selected disabled>Select Service</option>
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                    @endforeach
                </select>
                @error('fast_track_service_id')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="mb-4">
                <label for="date" class="block text-gray-600 font-semibold mb-2">Date</label>
                <input type="date" id="date" name="date" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                @error('date')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="time" class="block text-gray-600 font-semibold mb-2">Time</label>
                <input type="time" id="time" name="time" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                @error('time')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="mb-4">
                <label for="number_of_adults" class="block text-gray-600 font-semibold mb-2">Number of Adults</label>
                <input type="number" id="number_of_adults" name="number_of_adults" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                @error('number_of_adults')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="mb-4">
                <label for="number_of_children" class="block text-gray-600 font-semibold mb-2">Number of Children</label>
                <input type="number" id="number_of_children" name="number_of_children" class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
                @error('number_of_children')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="mt-6">
                <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Book Now</button>
            </div>
        </form>
        
      </div>
  </div>
</div>
  @endsection