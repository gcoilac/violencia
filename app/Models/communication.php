<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class communication extends Model
{
    use HasFactory;

    public function geolocation()
    {
        return $this->belongsTo('App\Models\geolocation');
    }
}
