<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class captcha extends Model
{
    use HasFactory;

    public function report()
    {
        return $this->belongsTo('App\Models\report');
    }

    public function geolocations()
    {
        return $this->hasOne('App\Models\geolocation');
    }
}
