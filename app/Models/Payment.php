<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',
        'payment_status',
        'payment_method',
        'amount', 
        'booking_id',
        'currency', 
        'user_id',
        
    ];
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
