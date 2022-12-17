<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Traits\AlertTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    use AlertTrait;

    public function index()
    {
        $experiences = Experience::where('user_id', Auth::user()->id)
                                    ->orderBy('id', 'desc')
                                    ->get();
        return view('backend.experiences.view', compact('experiences'));
    }

    public function create()
    {
        return view('backend.experiences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'nullable',
            'type' => 'required|max:50',
            'timeline' => 'nullable',
            'description' => 'required',
        ]);

        $experience = new Experience();
        $experience->user_id = Auth::user()->id;
        $experience->fill($request->only([
            'title',
            'company',
            'type',
            'timeline',
            'description',
        ]));

        $experience->save();

        return redirect()
        ->route('experiences.view')
        ->with($this->successAlert('Experience created successfully!'));
    }

    public function show($id)
    {
        $experience = Experience::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();
       
        return view('backend.experiences.single', compact('experience'));
    }

    public function edit($id)
    {
        $experience = Experience::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();
       
        return view('backend.experiences.edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $experience = Experience::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();

        $request->validate([
            'title' => 'required',
            'company' => 'nullable',
            'type' => 'required|max:50',
            'timeline' => 'nullable',
            'description' => 'required',
        ]);

        $experience->update($request->only([
            'title',
            'company',
            'type',
            'timeline',
            'description',
        ]));


        if(!($experience->wasChanged())){
            return redirect()
            ->route('experiences.view')
            ->with($this->infoAlert('No change.'));
        }

        return redirect()
        ->route('experiences.show', ['id'=>$id])
        ->with($this->successAlert('Experience updated successfully!'));
    }

    public function destroy($id)
    {
        $experience = Experience::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();

        $experience->delete();

        return back()->with($this->successAlert('Experience deleted successfully!'));
    }
}
