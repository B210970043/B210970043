<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sum;

class SumController extends Controller
{
    public function fetchSums($aimag_id)
    {
        $data = Sum::where('aimag_id', $aimag_id)->get();
        return response()->json($data);
    }

}

