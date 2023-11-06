<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class violence extends Model
{
    use HasFactory;

    public function reports()
    {
        return $this->hasOne('App\Models\report');
    }

    public function evaluations()
    {
        return $this->hasOne('App\Models\evaluation');
    }

    public function rule()
    {
        return $this->belongsTo('App\Models\rule');
    }
}
