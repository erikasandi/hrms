<?php

namespace App\Service;


use App\Models\Asset as AssetModel;
use App\Models\Asset;

abstract class AssetHandler
{
    /**
     * @var Asset
     */
    private $assetModel;

    /**
     * AssetHandler constructor.
     * @param Asset $assetModel
     */
    public function __construct(Asset $assetModel)
    {
        $this->assetModel = $assetModel;
    }

    abstract function store();

    public function storeAsset(array $inputs)
    {
        $assetParams = array_only($inputs, ['code', 'name', 'location_id', 'asset_type_id']);
        return $this->assetModel->create($assetParams);
    }

    public function storeImages(array $inputs)
    {
        $images = array_only($inputs, ['images']);
        foreach ($images as $image) {
            $this->assetModel->images()->create([
                'title' => '',
                'path' => $path
            ]);
        }



    }
}