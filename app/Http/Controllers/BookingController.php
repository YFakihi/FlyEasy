<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Service;
use App\Models\User;
use App\Repositories\BookingRepository;
use App\Repositories\BookingRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $bookingRepository;

     public function __construct(BookingRepositoryInterface $bookingRepository){
        $this->bookingRepository = $bookingRepository;
     }

    public function index()
    {
   
        $airports  = Airport::with('services')->get();
        $booking = Booking::all();

        return view('pages.booking', compact('booking', 'airports'));
    }
    /**
     * Show the form for creating a new resource.
     */

public function create(Request $request){
        $validatedData = $request->validate([
            'airport_id' => 'required|exists:airports,id',
            'date' => 'required|date|after_or_equal:today',
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
    
    // Set a default value for payment_status
    $validatedData['payment_status'] = 'pending';
    
  
    // $booking = Booking::create($validatedData);
    $this->bookingRepository->create($validatedData);

 
    return redirect()->route('welcome')->with('success', 'Booking created successfully.');
}

public function statistic(BookingRepositoryInterface $bookingRepository){
    $totalRevenue = $bookingRepository->getTotalRevenue();
    $users = $bookingRepository->getUserCount();
    $admin = $bookingRepository->getAdminCount();
    $airports = $bookingRepository->getAirportCount();
    $services = $bookingRepository->getServiceCount();
    $booking = $bookingRepository->getBookingCount();

    return view('dashboard.overview', compact('totalRevenue','users','admin'
,'airports','services','booking'));
}


public function displaybooking()
{
    $booking = $this->bookingRepository->all();
    $user = $this->bookingRepository->all();
    $payments = $this->bookingRepository->all();
    $airports = $this->bookingRepository->all();
   
    return view('dashboard.booking',compact('booking','user','airports','payments'));
}


public function overview(){
    $airports = $this->bookingRepository->all();
    $booking = $this->bookingRepository->all();
    $services = $this->bookingRepository->all();

    
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