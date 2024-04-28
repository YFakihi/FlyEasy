<?php
// app/Repositories/UserRepository.php

namespace App\Repositories;

use App\Models\Airport;

class AirportRepository implements AirportRepositoryInterface 
{ 
    public function create(array $data)
    {
        $Airport = Airport::create($data); 
        return $Airport;
    }

    public function update(Airport $Airport, array $data)
    {
        $Airport->update($data);
        return $Airport;
    }
  
    public function delete(Airport $Airport)
    {
        $Airport->delete();
    }
    public  function getAll() {
        return Airport::all();
    }
    public function getById(int $id)
    { 
        return Airport::find($id);
    }
    public function findByEmail(string $email)
    {
        return Airport::where("email", $email)->first();
    }

    

 
    

}
