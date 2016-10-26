<?php

namespace App\Service;


use Intervention\Image\Facades\Image;

class ImageService
{

    /**
     * ImageService constructor.
     */
    public function __construct()
    {
    }

    public function saveImage($image)
    {
        $imageName = $image->getClientOriginalName();
        $image = Image::make($image);
//        $image->resize(300, null, function ($constraint) {
//            $constraint->aspectRatio();
//        });
        $publicUrl = 'uploads/thumbnails/' . $imageName;
        $imagePath = public_path($publicUrl);
        $image->save($imagePath);
        return $publicUrl;
    }
}