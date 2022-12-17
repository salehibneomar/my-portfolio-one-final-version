<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\User;

class SkillController extends Controller
{

    public function index()
    {
        $skills = Skill::where('user_id', User::firstOrFail()->id)
        ->orderBy('level', 'desc')
        ->get();
        
        return view('frontend.pages.skills', compact('skills'));
    }

}
