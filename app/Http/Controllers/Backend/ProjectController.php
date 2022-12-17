<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Traits\AlertTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class ProjectController extends Controller
{

    use AlertTrait;

    public function index(Request $request)
    {
        $projects = Project::where('user_id', Auth::user()->id)->get();

        if($request->ajax()){
            $data = DataTables::of($projects)
            ->editColumn('id', '#{{$id}}')
            ->addColumn('action', function($project){
                $action = '<div class="btn-group btn-group-sm" role="group">
                    <a href="'.route('projects.show', ['id'=>$project->id]).'" type="button" class="text-white btn btn-success">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="'.route('projects.edit', ['id'=>$project->id]).'" type="button" class="text-white btn btn-info">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <a href="'.route('projects.delete', ['id'=>$project->id]).'" type="button" class="btn btn-danger dlt-btn">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </div>';

                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
           
            return $data;
        }

        return view('backend.projects.view');
    }


    public function create()
    {
        return view('backend.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'priority' => 'required|integer|between:1,6',
            'platform' => 'required|max:50',
            'techs' => 'required',
            'github' => 'nullable',
            'video' => 'nullable',
            'live' => 'nullable',
            'description' => 'required|max: 1000',
            'thumbnail' => 'required|image|mimes:jpg,png,jpeg|max:3073'
        ],
        [
            'thumbnail.max' => 'The thumbnail size should be within 3Mb',
        ]);

        $project = new Project();
        $project->user_id = Auth::user()->id;
        $project->fill($request->only([
            'name',
            'priority',
            'platform',
            'techs',
            'github',
            'video',
            'live',
            'description',
        ]));

        $project->platform_slug = Str::slug($request->platform);

        $imageFile = $request->file('thumbnail');
        $imageName = 'project_'.Str::random(24).'_dt_'.date('dmY_His').'_.'.$imageFile->getClientOriginalExtension();

        Image::make($imageFile)->resize(800, 420, function($constraint){
            $constraint->upsize();
        })->save(Project::THUMBNAIL_DIR.$imageName);

        $project->thumbnail = Project::THUMBNAIL_DIR.$imageName;

        $project->save();

        return redirect()
        ->route('projects.view')
        ->with($this->successAlert('Project created successfully!'));
    }


    public function show($id)
    {
        $project = Project::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();

        return view('backend.projects.single', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();
        
        return view('backend.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();

        $request->validate([
            'name' => 'required',
            'priority' => 'required|integer|between:1,6',
            'platform' => 'required|max:50',
            'techs' => 'required',
            'github' => 'nullable',
            'video' => 'nullable',
            'live' => 'nullable',
            'description' => 'required|max: 1000',
            'thumbnail' => 'image|mimes:jpg,png,jpeg|max:3073'
        ],
        [
            'thumbnail.max' => 'The thumbnail size should be within 3Mb',
        ]);

        $project->fill($request->only([
            'name',
            'priority',
            'platform',
            'techs',
            'github',
            'video',
            'live',
            'description',
        ]));

        $project->platform_slug = Str::slug($request->platform);

        if($request->hasFile('thumbnail')){

            if(file_exists($project->thumbnail)){
                unlink($project->thumbnail);
            }

            $imageFile = $request->file('thumbnail');
            $imageName = 'project_'.Str::random(24).'_dt_'.date('dmY_His').'_.'.$imageFile->getClientOriginalExtension();

            Image::make($imageFile)->resize(800, 420, function($constraint){
                $constraint->upsize();
            })->save(Project::THUMBNAIL_DIR.$imageName);

            $project->thumbnail = Project::THUMBNAIL_DIR.$imageName;
        }

        $project->save();

        if(!($project->wasChanged())){
            return redirect()
            ->route('projects.view')
            ->with($this->infoAlert('No change.'));
        }
        
        return redirect()
        ->route('projects.show', ['id'=>$project->id])
        ->with($this->successAlert('Project updated successfully!'));
    }

    public function destroy($id)
    {
        $project = Project::where('user_id', Auth::user()->id)
                          ->where('id', $id)
                          ->firstOrFail();

        if(file_exists($project->thumbnail)){
            unlink($project->thumbnail);
        }                  

        $project->delete();

        return back()->with($this->successAlert('Project deleted successfully!'));                  
    }
}
