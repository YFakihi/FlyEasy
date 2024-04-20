<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;

class StripeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function session(Request $request)
    {
        // Set your Stripe API key
        Stripe::setApiKey(config('services.stripe.secret'));
        
        // Retrieve product name and total price from the request
        $productName = $request->input('productname');
        $totalPrice = $request->input('totalPrice');
        $bookingId = $request->input('bookingId');
        
        // Create a Stripe Checkout session
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'USD',
                    'product_data' => [
                        'name' => $productName,
                    ],
                    'unit_amount' => $totalPrice * 100, // Convert total to cents
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('cancel'),
            'metadata' => [
                'booking_id' => $bookingId,
            ],
        ]);
    
        return redirect()->away($session->url);
    } 
    

    
        public function success(Request $request)
        {
            // Retrieve the session ID from the request
            $sessionId = $request->query('session_id');
        
            // Retrieve session details from Stripe
            Stripe::setApiKey(config('services.stripe.secret'));
            $checkout_session = \Stripe\Checkout\Session::retrieve($sessionId);
        
   
            // Debug: Dump the checkout session

        
            // Retrieve product name and total price
            $productName = isset($checkout_session->display_items[0]->custom->name) ? $checkout_session->display_items[0]->custom->name : null;
            $totalPrice = isset($checkout_session->display_items[0]->amount) ? $checkout_session->display_items[0]->amount / 100 : null; // Convert back to dollars
        
            // Retrieve other necessary details
            $paymentId = $checkout_session->payment_intent;
            $bookingId = isset($checkout_session->metadata->booking_id) ? $checkout_session->metadata->booking_id : null;
            $currency = isset($checkout_session->display_items[0]->amount->currency) ? $checkout_session->display_items[0]->amount->currency : null;
            $paymentStatus = isset($checkout_session->payment_status) ? $checkout_session->payment_status : null;
            $paymentMethod = isset($checkout_session->payment_method) ? $checkout_session->payment_method : null;
            $userId = auth()->id();
        
            // Check if booking id is not null
            if ($bookingId !== null) {
                // Store payment information in the payments table
                DB::table('payments')->insert([
                    'payment_id' => $paymentId,
                    'booking_id' => $bookingId,
                    'amount' => $totalPrice,
                    'currency' => $currency,
                    'payment_status' => $paymentStatus,
                    'payment_method' => $paymentMethod,
                ]);
        
                return "Thanks for your order. You have just completed your payment. The seller will reach out to you as soon as possible.";
            } else {
                return "Booking ID is missing. Payment could not be completed.";
            }
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
