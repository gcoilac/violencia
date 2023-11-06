<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;

    protected $table = 'reports';

    public function captchas()
    {
        return $this->hasMany('App\Models\captcha');
    }

    public function share()
    {
        return $this->belongsTo('App\Models\share');
    }

    public function violence()
    {
        return $this->belongsTo('App\Models\violence');
    }

    public  function reportable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\user');
    }
}
