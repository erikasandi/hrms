<?php

namespace App\Service;


use App\Models\AssetModel;

class MechanicalAsset extends AssetHandler
{
    /**
     * MechanicalAsset constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    function store(array $inputs)
    {
        $asset = $this->storeAsset($inputs);
        $assetParams = array_only(
            $inputs,
            [
                'specification', 'serial_number', 'install_date', 'function', 'asset_performance_id', 'asset_condition_id',
                'performance_detail', 'condition_detail'
            ]
        );

        return $asset->detail()->create($assetParams);
    }

    function update($id, array $inputs)
    {
        $asset = $this->updateAsset($id, $inputs);

        $assetDetail = $asset->detail;
        $assetDetail->specification = $inputs['specification'];
        $assetDetail->serial_number = $inputs['serial_number'];
        $assetDetail->install_date = $inputs['install_date'];
        $assetDetail->function = $inputs['function'];
        $assetDetail->asset_performance_id = $inputs['asset_performance_id'];
        $assetDetail->asset_condition_id = $inputs['asset_condition_id'];
        $assetDetail->performance_detail = $inputs['performance_detail'];
        $assetDetail->condition_detail = $inputs['condition_detail'];

        return $assetDetail->save();
    }
}