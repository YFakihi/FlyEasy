<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Booking;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $airports = Airport::with('services')->get();
        $booking = Booking::all();
    
        return view('pages.booking', compact('booking', 'airports'));
    }

    public function display(){
        $booking = Booking::all();
        $user = User::all();
        $airport = Airport::all();
       
        return view('dashboard.booking',compact('booking','user','airport'));
    }

    /**
     * Show the form for creating a new resource.
     */

     public function create(Request $request)

{

    // dd($request->all());
    $validatedData = $request->validate([
        'airport_id' => 'required|exists:airports,id',
        'date' => 'required|date',
        'time' => 'required',
        'service_type' => 'required|in:arrival_fast_track,departure_fast_track',
        'number_of_adults' => 'required|integer|min:1',
        'number_of_children' => 'required|integer|min:0',
        'service_id' => 'required|exists:services,id',     
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
    ]);


    // Add the authenticated user's ID to the request data
    $validatedData['user_id'] = auth()->id();

    // Create a new booking using the validated data
    $booking = Booking::create($validatedData);

    // Redirect or respond as needed
    return redirect()->back()->with('success', 'Booking created successfully.');
}

public function overview(){
    $airports = Airport::all();
    $booking = booking::all();
    $services = Service::all();
    return view('dashboard.overview',compact('airports'));
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
