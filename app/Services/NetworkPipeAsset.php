<?php

namespace App\Service;


class NetworkPipeAsset extends AssetHandler
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
                'contract', 'location', 'location_2', 'contractor', 'operational_date', 'length_per_pipe_diameter', 'description', 'asset_condition_id', 'condition_detail', 'number_of_pipe', 'number_of_valve', 'number_of_pipe_bridge'
            ]
        );

        $params = [];
        if ($assetParams['contract'] != '') {
            $params['contract'] = $assetParams['contract'];
        }
        if ($assetParams['location'] != '') {
            $params['location'] = $assetParams['location'];
        }
        if ($assetParams['location_2'] != '') {
            $params['location_2'] = $assetParams['location_2'];
        }
        if ($assetParams['contractor'] != '') {
            $params['contractor'] = $assetParams['contractor'];
        }
        if ($assetParams['operational_date'] != '') {
            $params['operational_date'] = $assetParams['operational_date'];
        }
        if ($assetParams['length_per_pipe_diameter'] != '') {
            $params['length_per_pipe_diameter'] = $assetParams['length_per_pipe_diameter'];
        }
        if ($assetParams['description'] != '') {
            $params['description'] = $assetParams['description'];
        }
        if ($assetParams['asset_condition_id'] != '') {
            $params['asset_condition_id'] = $assetParams['asset_condition_id'];
        }
        if ($assetParams['condition_detail'] != '') {
            $params['condition_detail'] = $assetParams['condition_detail'];
        }
        if ($assetParams['number_of_pipe'] != '') {
            $params['number_of_pipe'] = $assetParams['number_of_pipe'];
        }
        if ($assetParams['number_of_valve'] != '') {
            $params['number_of_valve'] = $assetParams['number_of_valve'];
        }
        if ($assetParams['number_of_pipe_bridge'] != '') {
            $params['number_of_pipe_bridge'] = $assetParams['number_of_pipe_bridge'];
        }

        return $asset->detail()->create($params);
    }

    function update($id, array $inputs)
    {
        $asset = $this->updateAsset($id, $inputs);

        $assetDetail = $asset->detail;
        $assetDetail->contract = $inputs['contract'];
        $assetDetail->location = $inputs['location'];
        $assetDetail->location_2 = $inputs['location_2'];
        $assetDetail->contractor = $inputs['contractor'];
        $assetDetail->operational_date = $inputs['operational_date'];
        $assetDetail->length_per_pipe_diameter = $inputs['length_per_pipe_diameter'];
        $assetDetail->description = $inputs['description'];
        $assetDetail->asset_condition_id = $inputs['asset_condition_id'];
        $assetDetail->condition_detail = $inputs['condition_detail'];
        $assetDetail->number_of_pipe = $inputs['number_of_pipe'];
        $assetDetail->number_of_valve = $inputs['number_of_valve'];
        $assetDetail->number_of_pipe_bridge = $inputs['number_of_pipe_bridge'];

        return $assetDetail->save();
    }
}