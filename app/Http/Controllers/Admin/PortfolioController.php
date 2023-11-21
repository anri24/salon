<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Services\GalleryService;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $photo = Gallery::all();
        return view('admin.upload_photo', compact('photo'));
    }

    public function store(Request $request,GalleryService $service)
    {
        Gallery::create(['photo'=>$service->storeImage($request,'gallery','image')]);
        return redirect()->route('photos');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('photos');
    }
}
