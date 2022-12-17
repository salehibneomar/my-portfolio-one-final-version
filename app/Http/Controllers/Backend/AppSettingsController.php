<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AppSettings;
use App\Traits\AlertTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class AppSettingsController extends Controller
{

    use AlertTrait;
    
    public function edit()
    {
        $settings = AppSettings::where('user_id', Auth::user()->id)->firstOrFail();
        return view('backend.settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'logo' => 'image|mimes:png|max:128'
        ]);

        $settings = AppSettings::where('user_id', Auth::user()->id)->firstOrFail();

        $settings->name = $request->name;

        if($request->hasFile('logo')){
            if(file_exists($settings->logo)){
                unlink($settings->logo);
            }

            $imageFile = $request->file('logo');
            $imageName = 'logo.'. $imageFile->getClientOriginalExtension();

            Image::make($imageFile)->resize(64,64, function($constraint){
                $constraint->upsize();
            })->save(AppSettings::LOGO_DIR.$imageName);

            $settings->logo = AppSettings::LOGO_DIR.$imageName;
        }

        $settings->save();

        return back()->with($this->successAlert('Settings updated successfully!'));

    }

}
