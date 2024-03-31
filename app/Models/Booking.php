<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';
    protected $fillable = [
        'airport_id',
        'fast_track_service_id',
        'date',
        'time',
        'service_type',
        'number_of_adults',
        'number_of_children',
        'user_id',
        'airport_id',
        'status',
    ];
}
