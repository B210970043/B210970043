<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aimag;
use App\Models\Sum;

class Sum extends Model
{
    use HasFactory;
    public function aimag(): BelongsTo
    {
        return $this->belongsTo(Aimag::class);
    }
    public function anket(): hasMany
    {
        return $this->hasMany(Anket::class);
    }
    
}
