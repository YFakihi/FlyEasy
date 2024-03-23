<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'fast_track_services';

    protected $fillable = [
        'name',
        'description',
        'price',
    ];
}
