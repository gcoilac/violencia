<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;

    public function geolocations()
    {
        return $this->hasOne('App\Models\geolocation');
    }
}
