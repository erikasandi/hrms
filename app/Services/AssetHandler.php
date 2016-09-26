<?php

namespace App\Service;


use App\Models\Asset as AssetModel;

abstract class AssetHandler
{
    abstract function store();

    public function storeAsset(array $inputs)
    {
        $assetModel = new AssetModel();
        $assetParams = array_only($inputs, ['code', 'name', 'location_id', 'asset_type_id']);
        return $assetModel->create($assetParams);
    }
}