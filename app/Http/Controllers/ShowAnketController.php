<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anket;
use App\Models\Aimag;
use Illuminate\Support\Facades\DB;
class ShowAnketController extends Controller
{
    public function showAnkets(){
        $ankets = Anket::with(['aimag','sum'])->get();
        return view('show', ['ankets' => $ankets]);
    }
    public function showAimags()
    {
    $aimags = DB::table('ankets')
            ->select('aimags.aimag_ner', DB::raw('COUNT(ankets.id) as ankets_count'))
            ->join('aimags', 'ankets.aimag_id', '=', 'aimags.id')
            ->groupBy('aimags.aimag_ner')
            ->get();
    return view('aimag', ['aimags' => $aimags]);
    }
}

