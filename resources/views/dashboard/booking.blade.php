@extends('dashboard.home')
@section('content')

<section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased">
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-4"> user_name </th>
                    <th scope="col" class="px-4 py-4"> airport</th>
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
                    <td class="px-4 py-3">{{($reservation->first_name) ." ". ($reservation->last_name)}}</td>
                    <td class="px-4 py-3">{{$reservation->airport->name}}</td>
                    <td class="px-4 py-3">{{$reservation->date}}</td>
                    <td class="px-4 py-3">{{$reservation->time}}</td> 
                    <td class="px-4 py-3">{{$reservation->payment_status }}</td>              
                  <td class="px-4 py-3">{{$reservation->service_type}}</td>
                    <td class="px-4 py-3">{{$reservation->number_of_adults}}</td>
                    <td class="px-4 py-3">{{$reservation->number_of_children}}</td>
                </tr>  
                @endforeach
              
            </tbody>
        </table>
        
    </div>
  

</section>    

@endsection