<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';
    protected $fillable = [
        // 'fast_track_service_id',
        'date',
        'time',
        'service_type',
        'number_of_adults',
        'number_of_children',
        'user_id',
        'airport_id',
        'service_id',
        'payment',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }  
    
    public function airport(){
        return $this->belongsTo(Airport::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }

    public function card(){
        return $this->belongsTo(Cart::class);
    }
}
