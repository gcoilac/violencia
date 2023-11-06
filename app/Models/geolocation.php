<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class geolocation extends Model
{
    use HasFactory;

    public function captcha()
    {
        return $this->belongsTo('App\Models\captcha');
    }

    public function location()
    {
        return $this->belongsTo('App\Models\location');
    }

    public function communications()
    {
        return $this->hasOne('App\Models\communication');
    }
}
