<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;

    // public function personal_access_token()
    // {
    //     return $this->belongsTo('App\Models\personal_access_token');
    // }

    public function videos()
    {
        return $this->hasOne('App\Models\video');
    }

    public function infografias()
    {
        return $this->hasOne('App\Models\infografia');
    }

    public function networks()
    {
        return $this->hasMany('App\Models\network');
    }
}
