<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\User;

class EducationController extends Controller
{

    public function index()
    {
        $education = Education::where('user_id', User::firstOrFail()->id)
        ->orderBy('id', 'desc')
        ->get();

        $total = $education->count();

        return view('frontend.pages.education', compact('education', 'total'));
    }

}
