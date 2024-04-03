@extends('dashboard.home')
@section('content')

<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-4"> user_name </th>
                    <th scope="col" class="px-4 py-4"> airport</th>
                    <th scope="col" class="px-4 py-4"> fast_track_service_id</th>
                    <th scope="col" class="px-4 py-4"> date</th>
                    <th scope="col" class="px-4 py-4"> time</th>
                    <th scope="col" class="px-4 py-4"> Payment</th>
                    <th scope="col" class="px-4 py-4"> service_type </th>
                    <th scope="col" class="px-4 py-4"> number_of_adults </th>
                    <th scope="col" class="px-4 py-4"> number_of_children</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($booking as $reservation)
                <tr class="border-b dark:border-gray-700">
                    <td class="px-4 py-3">{{$reservation->user->name}}</td>
                    <td class="px-4 py-3">{{$reservation->airport->name}}</td>
                    <td class="px-4 py-3">{{$reservation->fast_track_service_id}}</td>
                    <td class="px-4 py-3">{{$reservation->date}}</td>
                    <td class="px-4 py-3">{{$reservation->time}}</td> 
                    <td class="px-4 py-3">{{$reservation->Payment}}</td> 
                    <td class="px-4 py-3">{{$reservation->service_type}}</td>
                    <td class="px-4 py-3">{{$reservation->number_of_adults}}</td>
                    <td class="px-4 py-3">{{$reservation->number_of_children}}</td>
                </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
            Showing
            <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
            of
            <span class="font-semibold text-gray-900 dark:text-white">1000</span>
        </span>
        <ul class="inline-flex items-stretch -space-x-px">
            <!-- Pagination links -->
        </ul>
    </nav>
</section>    

@endsection
