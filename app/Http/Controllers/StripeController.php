<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
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
            ]);
    
            return redirect()->away($session->url);
        } 

    

    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
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
