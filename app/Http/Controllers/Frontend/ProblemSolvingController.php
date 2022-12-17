<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ProblemSolving;
use App\Models\User;

class ProblemSolvingController extends Controller
{
    public function index(){
        $solvings = ProblemSolving::where('user_id', User::firstOrFail()->id)
                    ->orderBy('solved', 'desc')
                    ->get();
        
        $chartLabels =  $solvings->pluck('platform');
        $chartData   = $solvings->pluck('solved');
        $totalSolved = $chartData->sum();

        return view('frontend.pages.problem_solvings', 
        compact('solvings', 'chartLabels', 'chartData', 'totalSolved'));
    }
}
