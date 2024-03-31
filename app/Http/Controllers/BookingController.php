<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = Booking::all();
        $airports = Airport::all();
        $services = Service::all();
        return view('pages.booking',compact('booking','airports','services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($request);
        
        $validatedData =  $request->validate([
            'airport_id' => 'required|exists:airports,id',
            'fast_track_service_id' => 'required|exists:fast_track_services,id',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'service_type' => 'required|in:arrival_fast_track,departure_fast_track',
            // 'service_type' => 'required|in:departure_fast_track,arrival_fast_track',
            'number_of_adults' => 'required|integer|min:1',
            'number_of_children' => 'required|integer|min:0',
        ]);

        // dd($validatedData['service_type']);

        
            $booking = new Booking();

            $booking->airport_id = $validatedData['airport_id'];
            // $booking->user_id = 1;   
            $booking->user_id = auth()->user()->id; 
            $booking->fast_track_service_id = $validatedData['fast_track_service_id'];
            $booking->date = $validatedData['date'];
            $booking->time = $validatedData['time'];
            $booking->service_type = $validatedData['service_type'];
            $booking->number_of_adults = $validatedData['number_of_adults'];
            $booking->number_of_children = $validatedData['number_of_children'];
    
            // Set default status
            $booking->status = 'pending';
    
            // Save the booking
            $booking->save();
            // // $booking->user_id = auth()->user()->id; 
            // $booking->airport_id = $request->airport_id;
            // $booking->fast_track_service_id = $request->fast_track_service_id;
            // $booking->date = $request->date;
            // $booking->time = $request->time;
            // $booking->status = 'pending';   
            // $booking->user_id = 1;   
            // // $booking->airport_id = 43;   
            // $booking->service_type = '';
            // $booking->number_of_adults = $request->number_of_adults;
            // $booking->number_of_children = $request->number_of_children;
            // $booking->save();

            
    
          
            return redirect()->back()->with('success','service bien ajouter!!');
    
    }
  
    
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
