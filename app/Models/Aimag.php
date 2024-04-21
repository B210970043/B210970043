<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aimag extends Model
{
    use HasFactory;

    public function sums()
    {
        return $this->hasMany(Sum::class);
    }
    public static function getAimagNer($aimag_id)
    {
        $aimag = self::find($aimag_id);
        if ($aimag) {
            return $aimag->aimag_ner;
        } else {
            return null;
        }
    }
    
}


