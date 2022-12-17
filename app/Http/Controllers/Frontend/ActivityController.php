<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Activity;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::where('user_id', User::firstOrFail()->id)
        ->orderBy('id', 'desc')
        ->orderBy('updated_at', 'desc')
        ->paginate(6);

        $total = $activities->total();

        return view('frontend.pages.activities', compact('activities', 'total'));
    }
}
