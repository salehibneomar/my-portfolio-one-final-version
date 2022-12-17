<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Traits\AlertTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{

    use AlertTrait;

    public function index()
    {
        $education = Education::where('user_id', Auth::user()->id)
        ->orderBy('id', 'desc')
        ->get();
        return view('backend.education.view', compact('education'));
    }

    public function create()
    {
        return view('backend.education.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'passing_year' => 'nullable|max:30',
            'timeline' => 'nullable|max:30',
            'grade' => 'required|max:30',
            'institute' => 'required',
            'description' => 'required',
        ]);

        $education = new Education();
        $education->fill($request->only([
            'title',
            'passing_year',
            'timeline',
            'grade',
            'institute',
            'description',
        ]));
        $education->user_id = Auth::user()->id;
        $education->save();

        return redirect()
        ->route('education.view')
        ->with($this->successAlert('Education created successfully!'));
    }

    public function show($id)
    {
        $education = Education::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();

        return view('backend.education.single', compact('education'));
    }

    public function edit($id)
    {
        $education = Education::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();
        return view('backend.education.edit', compact('education'));
    }

    public function update(Request $request, $id)
    {
        $education = Education::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();

        $request->validate([
            'title' => 'required',
            'passing_year' => 'nullable|max:30',
            'timeline' => 'nullable|max:30',
            'grade' => 'required|max:30',
            'institute' => 'required',
            'description' => 'required',
        ]);

        $education->update($request->only([
            'title',
            'passing_year',
            'timeline',
            'grade',
            'institute',
            'description',
        ]));

        if(!($education->wasChanged())){
            return redirect()
            ->route('education.view')
            ->with($this->infoAlert('No change.'));
        }

        return redirect()
        ->route('education.show', ['id'=>$id])
        ->with($this->successAlert('Education updated successfully!'));
    }

    public function destroy($id)
    {
        $education = Education::where('user_id', Auth::user()->id)
                                ->where('id', $id)
                                ->firstOrFail();

        $education->delete();
        
        return back()->with($this->successAlert('Education deleted successfully!'));
    }
}
