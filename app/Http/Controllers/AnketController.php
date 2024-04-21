<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anket;


class AnketController extends Controller
{

    public function store_data(Request $request)
    {
        $data = new Anket;
        $existUser = Anket::where('user_phone_number', $request->input('user_phone_number'))->exists();
    
        if ($existUser) {
            return redirect('/')->with('error', 'Burtgeltei utas baina!!');
        } else {
            $data->user_first_name = $request->input('user_first_name');
            $data->user_last_name = $request->input('user_last_name');
            $data->user_age = $request->input('user_age');
            $data->user_phone_number = $request->input('user_phone_number');
            $data->user_address = $request->input('user_address');
            $data->aimag_id = $request->input('aimag_id');
            $data->sum_id = $request->input('sum_id');
            $data->save();
            return redirect()->route('user_login')->with('success', 'Amjilttai!');
        }
    }
    
}

