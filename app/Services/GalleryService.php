<?php

namespace App\Services;

use Illuminate\Support\Str;
class GalleryService
{
    public function storeImage($request, $folder, $file)
    {
        $file = $request->file($file);

        $imgFile = time() . Str::random(10) . '.' . $file->getClientOriginalExtension();
        public_path($folder . $imgFile);

        $file->move($folder, $imgFile);

        return $imgFile;
    }
}
