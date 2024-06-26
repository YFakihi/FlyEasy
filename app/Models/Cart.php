<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;


    public function booking(){
        return $this->hasMany(Booking::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}

