<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\VisitorTrack;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors = VisitorTrack::orderBy('updated_at', 'desc')->paginate(5, ['*'], 'visitor-table');
        $visitorCount = $visitors->total();

        return view('backend.dashboard', compact('visitors', 'visitorCount'));
    }
}
