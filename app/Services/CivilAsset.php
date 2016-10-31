<?php

namespace App\Service;


class CivilAsset extends AssetHandler
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
        parent::__construct();
        $this->inputs = $inputs;
        $this->asset = $this->storeAsset($inputs);
    }

    function store()
    {
        $assetParams = array_only(
            $this->inputs,
            [
                'specification', 'contructor', 'construction_date', 'function', 'asset_performance_id', 'asset_condition_id', 'performance_detail', 'condition_detail'
            ]
        );

        return $this->asset->detail()->create($assetParams);
    }
}