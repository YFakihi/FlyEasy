<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function booking(){
        return $this->belongsTo(Booking::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'airport_service');
    }
}
