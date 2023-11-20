<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $photo = Gallery::all();
        return view('admin.upload_photo', compact('photo'));
    }


    public function store(Request $request){
        $img = new Gallery();


        $file = $request->file('image');
        $ext = $file->getClientOriginalName();
        $filename = time().'.'.$ext;
        $file->move('images/photos/',$filename);
        $img->photo = $filename;
        $img->save();
        return redirect('photo');

    }

    public function destroy($id){
        $photo = Gallery::find($id);
        $photo->delete();
        return redirect('photo');
    }
}
