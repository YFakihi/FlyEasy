<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Booking;
use App\Models\Cart;
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
     
         $bookings = $user->booking()->where('payment_status', 'pending')->get();
     
         $airports = Airport::all(); 
         $services = Service::all();
     
         foreach ($bookings as $booking) {
             $totalPrice = $booking->service->price * ($booking->number_of_adults + $booking->number_of_children * 0.6);
             $booking->totalPrice = $totalPrice;
         }
     
         return view('pages.pannier', compact('user', 'airports', 'bookings', 'services'));
     }
    




   
    




    public function remove($id)
    {
    
        $booking = auth()->user()->booking()->findOrFail($id);
      
        $booking->delete();
        
      
        return redirect()->back()->with('success', 'Booking removed successfully');
    }
    


     // public function showCart()
    // {
    //     $cartItems = Cart::where('user_id', auth()->id())->get();
    
        

        
    //     $totalPrice = $cartItems->sum(function ($item) {
    //         return $item->product->price * $item->quantity; 
    //     });
        
    //     $booking_id = null;
    //     $booking = null;
        
    //     if ($cartItems->isNotEmpty()) {
    //         $firstCartItem = $cartItems->first();
    //         $booking_id = $firstCartItem->booking_id;
    //         $booking = Booking::find($booking_id);
    //     }
        
        
    //     if (!$booking) {
    //         $booking = new Booking();
    //         $booking->save();
    //         $booking_id = $booking->id;
    //     }
    
    //     if ($totalPrice !== null) {
    //         $booking->amount = $totalPrice;
    //         $booking->save();
    //     }
        
    //     return view('pannier', compact('totalPrice', 'booking_id')); // Pass the total price and booking ID to the view
    // }
    
    

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
