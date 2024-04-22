<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;

class ProfiletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        
        // Get all bookings that have been paid for the current user
        $bookings = Booking::where('user_id', $user->id)
                            ->where('payment_status', 'paid')
                            ->get();
        
        $airports = Airport::all(); 
        $services = Service::all();

        foreach ($bookings as $booking) {
            $totalPrice = $booking->service->price * ($booking->number_of_adults + $booking->number_of_children * 0.6);
            $booking->totalPrice = $totalPrice;
        }

        return view('pages.profile', compact('user', 'airports', 'bookings', 'services'));
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
