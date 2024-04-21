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
    public static function edit_user($id,$user_first_name, $user_last_name, $user_age, $user_phone_number, $user_address){
        
        $user = Anket::find($id);
        $user->user_first_name = $user_first_name;
        $user->user_last_name = $user_last_name;
        $user->user_age = $user_age;
        $user->user_phone_number = $user_phone_number;
        $user->user_address = $user_address;
        $user->save();
    }
}
