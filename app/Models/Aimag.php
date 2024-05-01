<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sum;
use App\Models\Anket;

class Aimag extends Model
{
    use HasFactory;

    public function sums()
    {
        return $this->hasMany(Sum::class);
    }
    public function ankets()
    {
        return $this->hasMany(Anket::class);
    }
}


