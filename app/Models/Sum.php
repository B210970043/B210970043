<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sum extends Model
{
    use HasFactory;
    public static function getSumNer($sum_id)
    {
        $sum = self::find($sum_id);
        if ($sum) {
            return $sum->sum_ner;
        } else {
            return null;
        }
    }
    
}
