<?php
// app/Repositories/UserRepository.php

namespace App\Repositories;

use App\Models\Airport;

 

interface AirportRepositoryInterface
{


    public function create(array $data);
    public function findByEmail(string $email);
    public function delete(Airport $Airport);
    public function getById(int $id);
    public function getAll();
    public function update(Airport $Airport, array $data);


 

}
