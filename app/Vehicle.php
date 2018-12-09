<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'marka', 'model', 'godiste', 'tip', 'gorivo', 'kubikaza', 'slika'
    ];
}
