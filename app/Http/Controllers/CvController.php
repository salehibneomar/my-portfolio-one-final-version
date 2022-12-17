<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Traits\AlertTrait;
use Illuminate\Support\Str;
use App\Models\User;

class CvController extends Controller
{

    use AlertTrait;

    public function create()
    {
        return view('backend.profile.upload-cv');
    }

    public function store(Request $request)
    {
        $profile = Profile::where('user_id', Auth::user()->id)->firstOrFail();
        $request->validate([
            'cv' => 'required|file|mimes:pdf,PDF',
        ]);

        if(file_exists($profile->cv)){
            unlink($profile->cv);
        }

        $cvFile = $request->file('cv');
        $cvName = 'CV_of_'.Str::slug($profile->fullname).'.'.$cvFile->getClientOriginalExtension();

        $cvFile->move(public_path('cv'), $cvName);

        $profile->cv = 'cv/'.$cvName;

        $profile->save();

        return back()->with($this->successAlert('CV uploaded successfully!'));
        
    }

    public function downloadCv()
    {
        $cvDir = User::with('profile')->firstOrFail()->profile->cv;
        
        $cvFile = public_path($cvDir);
        $newCvfileName = pathinfo($cvFile)['filename'].'_download-date_'.date('j_m_Y').'_.pdf';
        $headers = ['Content-Type: application/pdf'];

        return response()->download($cvFile, $newCvfileName, $headers);
    }

   
    public function destroy()
    {
        $profile = Profile::where('user_id', Auth::user()->id)->firstOrFail();

        if(file_exists($profile->cv)){
            unlink($profile->cv);
        }
        
        $profile->cv = null;
        $profile->save();

        return back()->with($this->successAlert('CV removed successfully!'));
    }
}
