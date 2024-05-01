<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anket;
use App\Models\Aimag;
use App\Models\Sum;


class LoginController extends Controller
{
    public function user_login(Request $request)
{
    $user = Anket::with(['aimag', 'sum'])
                 ->where('user_first_name', $request->input('user_first_name'))
                 ->where('user_phone_number', $request->input('user_phone_number'))
                 ->first();

    if ($user) {
        $ankets = [
            'id' => $user->id,
            'first_name' => $user->user_first_name,
            'last_name' => $user->user_last_name,
            'age' => $user->user_age,
            'phone_number' => $user->user_phone_number,
            'address' => $user->user_address,
            'aimag_ner' => $user->aimag->aimag_ner,
            'sum_ner' => $user->sum->sum_ner,
        ];
        return view('dashboard', ['ankets' => $ankets]);
    } else {
        return redirect()->back()->with('error', 'Incorrect credentials. Please try again.');
    }
}

}


