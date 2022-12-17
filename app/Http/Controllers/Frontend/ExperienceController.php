<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Experience;

class ExperienceController extends Controller
{
    
    public function index()
    {
        $experiences = Experience::where('user_id', User::firstOrFail()->id)
        ->orderBy('timeline', 'desc')
        ->orderBy('updated_at', 'desc')
        ->orderBy('id', 'desc')
        ->get();

        $total = $experiences->count();

        return view('frontend.pages.experiences', compact('experiences', 'total'));
    }

}
