<?php
// app/Repositories/UserRepository.php

// app/Repositories/BookingRepository.php

namespace App\Repositories;

use App\Models\Airport;
use App\Models\Booking;
use App\Models\Service;
use App\Models\User;

class BookingRepository implements BookingRepositoryInterface
{
    public function create(array $data)
    {
        return Booking::create($data);
    }

    public function all()
    {
        return Booking::all();
    }

    public function getById($id)
    {
        return Booking::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $booking = $this->getById($id);
        $booking->update($data);
        return $booking;
    }

    public function delete($id)
    {
        $booking = $this->getById($id);
        $booking->delete();
    }

    public function getTotalRevenue()
    {
        return Booking::join('payments as p', 'booking.id', '=', 'p.booking_id')
            ->sum('p.amount');
    }

    public function getUserCount()
    {
        return User::count();
    }

    public function getAdminCount()
    {
        return User::where('role', 'admin')->count();
    }

    public function getAirportCount()
    {
        return Airport::count();
    }
    public function paginate($perPage)
    {
        return Booking::paginate($perPage);
    }
    public function getServiceCount()
    {
        return Service::count();
    }

    public function getBookingCount()
    {
        return Booking::count();
    }
}
