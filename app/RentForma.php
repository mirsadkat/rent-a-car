<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentForma extends Model
{
    protected $fillable = [
        'full_name', 'phone', 'email', 'pickup_date', 'pickup_time', 'dropoff_date', 'dropoff_time', 'car'
    ];
}
