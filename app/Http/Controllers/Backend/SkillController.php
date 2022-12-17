<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Traits\AlertTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class SkillController extends Controller
{

    use AlertTrait;

    public function index(Request $request)
    {
        $skills = Skill::where('user_id', Auth::user()->id)->get();

        if($request->ajax()){
            $data = DataTables::of($skills)
            ->editColumn('status', function($skill){
                $data = '<span class="badge bg-success">
                Yes
            </span>';

                $data = $skill->status==0 ? '<span class="badge bg-danger">
                No
            </span> ' : $data;

            return $data;

            })
            ->addColumn('action', function($skill){
                $action = '<div class="btn-group btn-group-sm" role="group">
                <a href="'.route('skills.edit', ['id'=>$skill->id]).'" type="button" class="text-white btn btn-info">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="'.route('skills.delete', ['id'=>$skill->id]).'" type="button" class="btn btn-danger dlt-btn">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </div>';

            return $action;

            })
            ->rawColumns(['status', 'action'])
            ->make(true);
            return $data;
        }

        return view('backend.skills.view', compact('skills'));
    }

    public function create()
    {
        return view('backend.skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'level' => 'required|integer|between:1,100',
            'status' => 'nullable',
        ]);

        $skill = new Skill();
        $skill->user_id = Auth::user()->id;

        $skill->fill($request->only([
            'name',
            'level',
        ]));

        $skill->status = $request->has('status') ? 1 : 0;

        $skill->save();

        return redirect()
        ->route('skills.view')
        ->with($this->successAlert('Skill created successfully!'));
    }

    public function edit($id)
    {
        $skill = Skill::where('user_id', Auth::user()->id)
                        ->where('id', $id)
                        ->firstOrFail();

        return view('backend.skills.edit', compact('skill'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'level' => 'required|integer|between:1,100',
            'status' => 'nullable',
        ]);

        $skill = Skill::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();

        
        $skill->fill($request->only([
            'name',
            'level',
        ]));

        $skill->status = $request->has('status') ? 1 : 0;

        $skill->save();

        if(!$skill->wasChanged()){
            return redirect()
            ->route('skills.view')
            ->with($this->infoAlert('No change.'));
        }

        return redirect()
        ->route('skills.view')
        ->with($this->successAlert('Skill updated successfully!'));
    }

    
    public function destroy($id)
    {
        $skill = Skill::where('user_id', Auth::user()->id)
                        ->where('id', $id)
                        ->firstOrFail();

        $skill->delete();
       
        return back()->with($this->successAlert('Skill deleted successfully!'));
    }
}
