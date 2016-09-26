<?php

namespace App\Service;


use App\Models\AssetModel;

class MechanicalAsset extends AssetHandler
{
    /**
     * @var \App\Models\Asset
     */
    private $inputs;
    private $asset;


    /**
     * MechanicalAsset constructor.
     */
    public function __construct(array $inputs)
    {
        $this->inputs = $inputs;
        $this->asset = $this->storeAsset($inputs);
    }

    function store()
    {
        $assetParams = array_only(
            $this->inputs,
            [
                'specification', 'serial_number', 'install_date', 'function', 'asset_performance_id', 'asset_condition_id',
                'performance_detail', 'condition_detail'
            ]
        );
//        var_dump($assetParams); exit;
        return $this->asset->detail()->create($assetParams);
    }
}