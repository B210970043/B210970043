<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aimag;
use App\Models\Sum;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Anket extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_first_name', 
        'user_last_name',
        'aimag_id'
    ];
    
    public function aimag(): BelongsTo
    {
        return $this->belongsTo(Aimag::class);
    }
    public function sum(): BelongsTo
    {
        return $this->belongsTo(Sum::class);
    }
}