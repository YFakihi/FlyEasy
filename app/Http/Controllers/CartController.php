<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Booking;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $booking = $user->booking()->with('service')->get();
        dd($booking);
      
        $airports = Airport::all(); 
        $services = Service::all();
        
        return view('pages.pannier', compact('user', 'airports', 'booking','services'));
        
    }


    public function remove($id)
    {
        // Find the booking in the user's bookings
        $booking = auth()->user()->booking()->findOrFail($id);
        
        // Delete the booking from the database
        $booking->delete();
        
        // Optionally, update any relevant totals or quantities
        
        // Redirect back or return a response indicating success
        return redirect()->back()->with('success', 'Booking removed successfully');
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
