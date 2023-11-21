<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Services\GalleryService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(): Factory|View|Application
    {
        $photo = Gallery::all();
        return view('admin.upload_photo', compact('photo'));
    }

    public function store(Request $request,GalleryService $service): RedirectResponse
    {
        Gallery::create(['photo'=>$service->storeImage($request,'gallery','image')]);
        return redirect()->route('photos');
    }

    public function destroy(Gallery $gallery): RedirectResponse
    {
        $gallery->delete();
        return redirect()->route('photos');
    }
}
