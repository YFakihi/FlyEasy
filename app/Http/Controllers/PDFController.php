<?php

namespace App\Http\Controllers;

  
namespace App\Http\Controllers;
 use App\Models\Airport;
 use App\Models\Booking;
 use App\Models\Service;
 use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     */

 



     public function download($id) {
    
        $booking = Booking::findOrFail($id);
        

        $airport = Airport::all();
        $service = Service::all();
    
        $bookingData = [
            'airport' => $airport->firstWhere('id', $booking->airport_id),
            'service' => $service->firstWhere('id', $booking->service_id),
            'time' => $booking->time,
            'date' => $booking->date,
            'totalPrice' => $booking->totalPrice
        ];
    
        // Load the view and pass data
        $pdf = PDF::loadView('pages.pdf', ['booking' => $bookingData]);
     
        // Download the PDF
        return $pdf->download('invoice.pdf');
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
 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
