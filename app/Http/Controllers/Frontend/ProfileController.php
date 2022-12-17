<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;

class ProfileController extends Controller
{

    public function index()
    {
        $profile = (User::with('profile')->firstOrFail())->profile;
        return view('frontend.pages.profile', compact('profile'));
    }
}
