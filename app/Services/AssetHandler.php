<?php

namespace App\Service;


use App\Models\Asset as AssetModel;
use Intervention\Image\Facades\Image;
use File;

abstract class AssetHandler
{
    protected $assetModel;

    /**
     * AssetHandler constructor.
     */
    public function __construct()
    {
        $this->assetModel = new AssetModel();
    }

    abstract function store(array $inputs);

    abstract function update($id, array $inputs);

    public function storeAsset(array $inputs)
    {
        $assetParams = array_only($inputs, ['code', 'name', 'location_id', 'asset_type_id']);
        $asset = $this->assetModel->create($assetParams);
        $this->storeImages($asset, $inputs);
        return $asset;
    }

    protected function updateAsset($id, array $inputs)
    {
        $asset = $this->assetModel->find($id);
        $asset->code = $inputs['code'];
        $asset->name = $inputs['name'];
        $asset->location_id = $inputs['location_id'];
        $asset->save();
        $this->updateImages($asset, $inputs);
        return $asset;
    }

    private function storeImages($asset, array $inputs)
    {
        $formRepeaters = isset($inputs['images']) ? $inputs['images'] : [];
        if (count($formRepeaters) > 0) {
            foreach ($formRepeaters as $repeater) {
                $imageInput = isset($repeater['image']) ? $repeater['image'] : '';
                if ($imageInput != '' && is_a($imageInput, 'Illuminate\Http\UploadedFile')) {
                    $imageName = $this->putImage($imageInput);
                    $this->addImage($asset, $imageName);
                }
            }
        }

    }

    private function updateImages($asset, $inputs)
    {
        $formRepeaters = $inputs['images'];
        $existingImages = $asset->images;
        $existingIds = $this->getExistingImageIds($existingImages);

        $submittedIds = $this->checkSubmittedIds($formRepeaters);

        // check deleted images
        foreach ($existingIds as $existingId) {
            if (! in_array($existingId, $submittedIds)) {
                $asset->images()->where('id', $existingId)->delete();
            }
        }

        // check new & updated images
        foreach ($formRepeaters as $repeater) {
            $imageId = isset($repeater['image_id']) ? $repeater['image_id'] : '';
            $imageInput = isset($repeater['image']) ? $repeater['image'] : '';
            if ($imageId == '') {
                if ($imageInput != '' && is_a($imageInput, 'Illuminate\Http\UploadedFile')) {
                    $imageName = $this->putImage($imageInput);
                    $this->addImage($asset, $imageName);
                }
            } else {
                $image = $asset->images()->where('id', $imageId)->first();
                if ($imageInput != '' && is_a($imageInput, 'Illuminate\Http\UploadedFile')) {
                    // update the image
                    $imageName = $this->putImage($imageInput);
                    $image->title = $imageName;
                    $image->path = $imageName;
                } else {
                    // just update the description
                }
                $image->save();
            }
        }
    }

    private function getExistingImageIds($existingImages)
    {
        $existingIds = [];
        foreach ($existingImages as $existingImage) {
            $existingIds[] = $existingImage->id;
        }

        return $existingIds;
    }

    private function checkSubmittedIds($formRepeaters)
    {
        $submittedIds = [];
        foreach ($formRepeaters as $formRepeater) {
            if (isset($formRepeater['image_id']) && $formRepeater['image_id'] != '') {
                $submittedIds[] = $formRepeater['image_id'];
            }
        }

        return $submittedIds;
    }

    private function addImage($asset, $imageName)
    {
        $asset->images()->create([
            'title' => $imageName,
            'path' => $imageName
        ]);
    }

    private function putImage($imageInput)
    {
        $imageName = $imageInput->getClientOriginalName();
        $folder = 'uploads/assets/';
        if (! File::exists(public_path($folder))) {
            File::makeDirectory(public_path($folder), 0775, true, true);
        }
        $image = Image::make($imageInput);
        $publicUrl = $folder . $imageName;
        $imagePath = public_path($publicUrl);
        $image->save($imagePath);

        return $imageName;
    }
}