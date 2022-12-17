<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use App\Traits\AlertTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    use AlertTrait;

    protected $maritalStatus = [
        "Unmarried",
        "Married",
        "Divorced",
        "Widowed",
    ];

    public function index()
    {
        $information = Profile::where('user_id', Auth::user()->id)->firstOrFail();
        return view('backend.profile.view', compact('information'));
    }

    public function edit()
    {
        $information = Profile::where('user_id', Auth::user()->id)->firstOrFail();
        $maritalStatus = $this->maritalStatus;
        return view('backend.profile.edit', 
        compact('information', 'maritalStatus'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'fullname'           => 'required|max:50',
            'nickname'           => 'required|max:20',
            'dob'                => 'required|date',
            'phone'              => 'required|max:20',
            'email'              => 'required|email',
            'present_addr'       => 'required',
            'about'              => 'required',
            'vision'             => 'required',
            'nationality'        => 'required|max:100',
            'religion'           => 'required|max:20',
            'marital_status'     => 'required|max:20',
            'education'          => 'required|max:254',
            'professional_title' => 'required',
            'formal_image'       => 'image|mimes:jpg,png,jpeg|max:3073',
            'typed_quotes'       => 'required',
            'current_job'        => 'nullable|max:254',
        ],
        [
            'formal_image.max' => 'The formal image size should be within 3Mb',
            'dob.required'     => 'The date of birth field is required'
        ]);

        $information = Profile::where('user_id', Auth::user()->id)->firstOrFail();

        $information->fill($request->only([
            'fullname',
            'nickname',
            'dob',
            'phone',
            'email' ,
            'present_addr',
            'about',
            'vision',
            'nationality',
            'religion',
            'marital_status',
            'education',
            'professional_title',
            'typed_quotes',
            'current_job',
        ]));

        if($request->hasFile('formal_image')){

            if(file_exists($information->formal_image)){
                unlink($information->formal_image);
            }

            $imageFile = $request->file('formal_image');
            $imageName = 'formal_image_dt_'.date('mdy_His').'_.'.$imageFile->getClientOriginalExtension();
            Image::make($imageFile)->fit(600,600, function($constraint){
                $constraint->upsize();
            })->save(Profile::IMAGE_DIR.$imageName);

            $information->formal_image = Profile::IMAGE_DIR.$imageName;
        }

        $information->save();

        if(!($information->wasChanged())){
            return redirect()
            ->route('profile.view')
            ->with($this->infoAlert('No change.'));
        }

        return redirect()
        ->route('profile.view')
        ->with($this->successAlert('Profile updated successfully!'));
    }

    public function editPassword(){
        return view('backend.profile.edit_password');
    }

    public function updatePassword(Request $request){
        $user = User::findOrFail(Auth::user()->id);
        $request->validate([
            'current_password' => 'required|min:8',
            'new_password' => 'required|min:8|confirmed'
        ]);

        if(!(Hash::check($request->current_password, $user->password))){
            return back()->with($this->warningAlert('Current Password didn\'t match.'));
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()
        ->route('dashboard')
        ->with($this->successAlert('Password changed successfully!'));
    }

}
