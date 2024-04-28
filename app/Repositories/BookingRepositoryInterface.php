<?php
// app/Repositories/UserRepository.php

namespace App\Repositories;

use App\Models\Booking;

 

interface BookingRepositoryInterface
{
    public function create(array $data);
    public function delete(Booking $Booking);
    public function getById(int $id);
    public function update($id,array $data);
    public function all();  
    public function getTotalRevenue();
    public function getUserCount();
    public function getAdminCount();
    public function getAirportCount();
    public function getServiceCount();
    public function getBookingCount();
 

}
