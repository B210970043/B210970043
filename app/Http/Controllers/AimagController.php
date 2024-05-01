<?php

namespace App\Http\Controllers;

use App\Models\Aimag;
use App\Models\Sum; 
use Illuminate\Http\Request;
use Auth;

class AimagController extends Controller
{
    public function index()
    {
        $aimags = Aimag::All();
        return view('notUsing/home', ['aimags' => $aimags]);

        //Auth::check()  Auth::id() Auth::user()->name  
        // auth()->user()->id

    }
}
