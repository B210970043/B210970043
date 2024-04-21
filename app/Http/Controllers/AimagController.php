<?php

namespace App\Http\Controllers;

use App\Models\Aimag;
use App\Models\Sum; // Don't forget to import the Sum model
use Illuminate\Http\Request;

class AimagController extends Controller
{
    public function index()
    {
        $aimags = Aimag::all();

        return view('home', ['aimags' => $aimags]);
    }
}
