<?php

namespace App\Traits;
use Illuminate\Http\Request;

trait ImageUploadTrait
{
    public function uploadImage(Request $request, $imageInput, $path)
    {
        if ($request->hasFile($imageInput)) {
            $image = $request->{$imageInput};
            $imageName = rand() . '-' . $image->getClientOriginalName();
            $image->move(public_path($path), $imageName);
            return $path . '/' . $imageName;
        }
    }
}
