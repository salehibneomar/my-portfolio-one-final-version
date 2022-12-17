<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Traits\AlertTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    use AlertTrait;

    public function index()
    {
        $media = Media::where('user_id', Auth::user()->id)->get();
        return view('backend.media.view', compact('media'));
    }

    public function create()
    {
        return view('backend.media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'platform' => 'required',
            'url' => 'required',
            'icon' => 'required|image|mimes:png,jpg,jpeg|max:128'
        ]);

        $media = new Media();
        $media->platform = $request->platform;
        $media->url = $request->url;
        
        $imageFile = $request->file('icon');
        $imageName = 'media_icon_'.Str::random(16).
                                '_dt_'.date('dmY_His_.').
                                $imageFile->getClientOriginalExtension();

        Image::make($imageFile)->resize(64,64, function($constraint){
            $constraint->upsize();
        })->save(Media::ICON_DIR.$imageName);

        $media->icon = Media::ICON_DIR.$imageName;
        $media->user_id = Auth::user()->id;
        $media->save();

        return redirect()
        ->route('media.view')
        ->with($this->successAlert('Media created successfully!'));

    }

    
    public function edit($id){
        $media = Media::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();

        return view('backend.media.edit', compact('media'));
    }

    public function update(Request $request, $id){

        $media = Media::where('user_id', Auth::user()->id)
        ->where('id', $id)
        ->firstOrFail();

        $request->validate([
            'platform' => 'required',
            'url' => 'required',
            'icon' => 'image|mimes:png,jpg,jpeg|max:128'
        ]);

        $media->platform = $request->platform;
        $media->url = $request->url;

        if($request->hasFile('icon')){
            if(file_exists($media->icon)){
                unlink($media->icon);
            }

            $imageFile = $request->file('icon');
            $imageName = 'media_icon_'.Str::random(16).
                                    '_dt_'.date('dmY_His_.').
                                    $imageFile->getClientOriginalExtension();

            Image::make($imageFile)->resize(64,64, function($constraint){
                $constraint->upsize();
            })->save(Media::ICON_DIR.$imageName);

            $media->icon = Media::ICON_DIR.$imageName;
        }

        $media->save();

        if(!$media->wasChanged()){
            return redirect()
            ->route('media.view')
            ->with($this->infoAlert('No Change.'));
        }

        return redirect()
        ->route('media.view')
        ->with($this->successAlert('Media updated successfully!'));
    }

    public function destroy($id)
    {
        $media = Media::where('user_id', Auth::user()->id)
                        ->where('id', $id)
                        ->firstOrFail();
        
        if(file_exists($media->icon)){
            unlink($media->icon);
        }                

        $media->delete();
        
        return back()->with($this->successAlert('Media deleted successfully!'));
    }
}
