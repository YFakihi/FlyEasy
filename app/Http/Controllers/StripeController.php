<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;
use App\Models\Payment;
use Illuminate\Support\Facades\Schema;

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
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        
        // Retrieve product name, total price, and booking ID from the request
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
    
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id');
            $table->decimal('amount', 10, 2);
            $table->string('currency');
            $table->string('payment_status');
            $table->string('payment_method');
            $table->integer('user_id');
            $table->string('payment_id')->nullable();
            $table->timestamps();
        });
    }
    
    public function success(Request $request)
    {
        // Set your Stripe API key
        Stripe::setApiKey(config('services.stripe.secret'));
        
        // Retrieve session ID from the request
        $session_id = $request->get('session_id');
    
        try {
            // Get the Stripe session
            $stripe_session = \Stripe\Checkout\Session::retrieve($session_id);
    
            // Retrieve booking ID from metadata
            $bookingId = $stripe_session->metadata->booking_id;
    
            // Retrieve payment details
            $payment = \Stripe\PaymentIntent::retrieve($stripe_session->payment_intent);
    
            // Store payment details in the payments table
            Payment::create([
                'booking_id' => $bookingId,
                'amount' => $payment->amount / 100, // Convert amount from cents to dollars
                'currency' => 'USD', // Set a default value for the currency
                'payment_status' => $payment->status,
                'payment_method' => $payment->payment_method,
                'user_id' => auth()->user()->id,
            ]);
    
            // Redirect to a success page
            return view('pages.success');
        } catch (\Exception $e) {
            return redirect()->route('cancel')->with('error', 'Error processing payment. Please try again.');
        }
    }
    
    

    public function cancel()
{
    return redirect()->route('welcome')->with('error', 'Payment was canceled.');
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
