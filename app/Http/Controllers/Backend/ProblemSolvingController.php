<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ProblemSolving;
use App\Traits\AlertTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProblemSolvingController extends Controller
{
    use AlertTrait;

    public function index()
    {
        $problemSolvings = ProblemSolving::where('user_id', Auth::user()->id)
                                            ->get();
        return view('backend.problem_solvings.view', compact('problemSolvings'));
    }

    public function create()
    {
        return view('backend.problem_solvings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'platform' => 'required',
            'solved' => 'required|integer|min:1',
            'profile' => 'nullable',
        ]);

        $problemSolving = new ProblemSolving();
        $problemSolving->user_id = Auth::user()->id;
        $problemSolving->fill($request->only([
            'platform',
            'solved',
            'profile',
        ]));

        $problemSolving->save();

        return redirect()
        ->route('problem-solvings.view')
        ->with($this->successAlert('Problem Solving Profile created successfully!'));
    }

    public function edit($id)
    {
        $problemSolving = ProblemSolving::where('user_id', Auth::user()->id)
                                        ->where('id', $id)
                                        ->firstOrFail();

        return view('backend.problem_solvings.edit', compact('problemSolving'));
    }

    public function update(Request $request, $id)
    {
        $problemSolving = ProblemSolving::where('user_id', Auth::user()->id)
                        ->where('id', $id)
                        ->firstOrFail();

        $request->validate([
            'platform' => 'required',
            'solved' => 'required|integer|min:1',
            'profile' => 'nullable',
        ]);

        $problemSolving->fill($request->only([
            'platform',
            'solved',
            'profile',
        ]));

        $problemSolving->save();

        if(!($problemSolving->wasChanged())){
            return redirect()
            ->route('problem-solvings.view')
            ->with($this->infoAlert('No change.'));
        }

        return redirect()
        ->route('problem-solvings.view')
        ->with($this->successAlert('Problem Solving Profile updated successfully!'));

    }

    public function destroy($id)
    {
        $problemSolving = ProblemSolving::where('user_id', Auth::user()->id)
                        ->where('id', $id)
                        ->firstOrFail();
        
        if(file_exists($problemSolving->icon)){
            unlink($problemSolving->icon);
        }                

        $problemSolving->delete();
       
        return back()->with($this->successAlert('Problem Solving Profile deleted successfully!'));
    }

}
