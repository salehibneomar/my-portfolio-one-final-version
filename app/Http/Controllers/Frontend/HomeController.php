<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VisitorTrack;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(Request $request)
    {
        $user    = User::with('profile', 'media')->firstOrFail();

        $profile = $user->profile;
        $media   = $user->media;

        VisitorTrack::updateOrCreate(
            [
                'ip'=> $request->ip(),
            ],
            [
                'updated_at'=> Carbon::now(),
            ]
        );
        
        return view('index', compact('profile', 'media'));
    }

}
