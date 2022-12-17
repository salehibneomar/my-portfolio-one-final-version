<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProjectController extends Controller
{
    public function index(Request $request){

        $platformAndCounts = Project::selectRaw('COUNT(*) as counts, platform, platform_slug')
        ->where('user_id', User::firstOrFail()->id)
        ->groupBy(['platform', 'platform_slug'])
        ->orderBy('counts', 'desc')
        ->get();

        $total = $platformAndCounts->sum('counts');

        $projects = Project::query();
        $projects = $projects->where('user_id', User::firstOrFail()->id);

        if($request->has('platform') && $request->filled('platform')){
            $projects = $projects->where('platform_slug', $request->platform);
        }

        $projects = $projects->orderBy('priority', 'desc')
        ->orderBy('id', 'desc')
        ->paginate(9)
        ->withQueryString();

        return view('frontend.pages.projects', 
        compact('projects', 'total', 'platformAndCounts'));

    }

    public function description($id){
        $singleProject = Project::select('name','description')->find($id);
        if(is_null($singleProject)){
            return response()->json('Project Not found!', 404);
        }

        return response()->json($singleProject, 200);
    }
}
