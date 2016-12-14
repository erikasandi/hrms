<?php

namespace App\Service;


use Intervention\Image\Filters\FilterInterface;
use Intervention\Image\Image;

class Cover implements FilterInterface
{

    /**
     * Applies filter to given image
     *
     * @param  Image $image
     * @return Image
     */
    public function applyFilter(Image $image)
    {
        return $image->fit(960);
    }
}