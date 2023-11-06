<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testigo extends Model
{
    use HasFactory;

    public function reports()
    {
        return $this->morphMany('App\Model\report', 'reportable');
    }
}
