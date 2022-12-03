<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function savePhoto(Request $request){
        $img = new Photo();


        $file = $request->file('image');
        $ext = $file->getClientOriginalName();
        $filename = time().'.'.$ext;
        $file->move('images/photos/',$filename);
        $img->photo = $filename;
        $img->save();
        return redirect('photo');
        
    }
    public function showPhoto(){
        $photo = Photo::all();
        return view('main.portfolio', compact('photo'));
    }
    public function adminshowPhoto(){
        $photo = Photo::all();
        return view('admin.upload_photo', compact('photo'));
    }
}
