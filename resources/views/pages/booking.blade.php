
@extends('layouts.app')

@section('title', 'Home')
@section('content')

<div class="container mx-auto px-4 py-8">
  <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md">
      <div class="px-6 py-4">
          <h2 class="text-2xl font-semibold text-gray-800 mb-2">Book a Ride</h2>
          <form action="#" method="POST">
              <div class="mb-4">
                  <label for="pickup_location" class="block text-gray-600 font-semibold mb-2">Pickup Location</label>
                  <input type="text" id="pickup_location" name="pickup_location"
                      class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
              </div>
              <div class="mb-4">
                  <label for="dropoff_location" class="block text-gray-600 font-semibold mb-2">Dropoff Location</label>
                  <input type="text" id="dropoff_location" name="dropoff_location"
                      class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
              </div>
              <div class="mb-4">
                  <label for="date" class="block text-gray-600 font-semibold mb-2">Date</label>
                  <input type="date" id="date" name="date"
                      class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
              </div>
              <div class="mb-4">
                  <label for="time" class="block text-gray-600 font-semibold mb-2">Time</label>
                  <input type="time" id="time" name="time"
                      class="w-full px-4 py-2 rounded-lg bg-gray-200 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0">
              </div>
              <div class="mt-6">
                  <button type="submit"
                      class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg font-semibold hover:bg-blue-600 focus:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Book
                      Now</button>
              </div>
          </form>
      </div>
  </div>
</div>
  @endsection