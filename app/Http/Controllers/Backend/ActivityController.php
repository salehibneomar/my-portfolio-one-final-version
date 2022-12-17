<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Traits\AlertTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class ActivityController extends Controller
{

    use AlertTrait;

    public function index(Request $request)
    {
        $activities = Activity::where('user_id', Auth::user()->id)->get();
        
        if($request->ajax()){
            $data = DataTables::of($activities)
            ->editColumn('id', '#{{$id}}')
            ->addColumn('action', function($activity){
                $action = '<div class="btn-group btn-group-sm" role="group">
                <a href="'.route('activities.show', ['id'=>$activity->id]).'" type="button" class="text-white btn btn-success">
                    <i class="fa-solid fa-eye"></i>
                </a>
                <a href="'.route('activities.edit', ['id'=>$activity->id]).'" type="button" class="text-white btn btn-info">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a href="'.route('activities.delete', ['id'=>$activity->id]).'" type="button" class="btn btn-danger dlt-btn">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </div>';

            return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
            
            return $data;
        }            
                    
        return view('backend.activities.view', compact('activities'));
    }

    public function create()
    {
        return view('backend.activities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'institute' => 'nullable|max:100',
            'purpose' => 'required',
            'ref' => 'nullable',
            'description' => 'required'
        ]);

        $activity = new Activity();
        $activity->user_id = Auth::user()->id;
        $activity->fill($request->only([
            'title',
            'institute',
            'purpose',
            'ref',
            'description'
        ]));

        $activity->save();

        return redirect()
        ->route('activities.view')
        ->with($this->successAlert('Activity created successfully!'));
    }

    public function show($id)
    {
        $activity = Activity::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();

        return view('backend.activities.single', compact('activity'));
    }

    public function edit($id)
    {
        $activity = Activity::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();

        return view('backend.activities.edit', compact('activity'));
    }

    public function update(Request $request, $id)
    {
        $activity = Activity::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();

        $request->validate([
            'title' => 'required',
            'institute' => 'nullable|max:100',
            'purpose' => 'required',
            'ref' => 'nullable',
            'description' => 'required'
        ]);

        $activity->update($request->only([
            'title',
            'institute',
            'purpose',
            'ref',
            'description'
        ]));

        if(!($activity->wasChanged())){
            return redirect()
            ->route('activities.view')
            ->with($this->infoAlert('No change.'));
        }

        return redirect()
        ->route('activities.show', ['id'=>$id])
        ->with($this->successAlert('Activity updated successfully!'));
    }

    public function destroy($id)
    {
        $activity = Activity::where('user_id', Auth::user()->id)
                                ->where('id', $id)
                                ->firstOrFail();
        $activity->delete();

        return back()->with($this->successAlert('Activity deleted successfully!'));
    }
}
