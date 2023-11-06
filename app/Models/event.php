<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $table = 'events';

    public function tipo()
    {
        return $this->belongsTo('App\Models\tipo');
    }

    public function users()
    {
        return $this->belongsTo(('App\Models\user'));
    }
}
