<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anket extends Model
{
    use HasFactory;
    
    public static function checkPhoneNumber($name, $number)
    {
        $exist = self::where('user_first_name', $name)
                     ->where('user_phone_number', $number)
                     ->exists();
        
        return $exist;
    }
}
