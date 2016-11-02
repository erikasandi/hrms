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
                'contract', 'contractor', 'pipe_diameter', 'description', 'operational_date', 'network_diameter',
                'number_of_valve', 'length', 'number_of_pipe_bridge'
            ]
        );

        $params = [];
        if ($assetParams['contract'] != '') {
            $params['contract'] = $assetParams['contract'];
        }
        if ($assetParams['contractor'] != '') {
            $params['contractor'] = $assetParams['contractor'];
        }
        if ($assetParams['pipe_diameter'] != '') {
            $params['pipe_diameter'] = $assetParams['pipe_diameter'];
        }
        if ($assetParams['description'] != '') {
            $params['description'] = $assetParams['description'];
        }
        if ($assetParams['operational_date'] != '') {
            $params['operational_date'] = $assetParams['operational_date'];
        }
        if ($assetParams['network_diameter'] != '') {
            $params['network_diameter'] = $assetParams['network_diameter'];
        }
        if ($assetParams['number_of_valve'] != '') {
            $params['number_of_valve'] = $assetParams['number_of_valve'];
        }
        if ($assetParams['length'] != '') {
            $params['length'] = $assetParams['length'];
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
        $assetDetail->contractor = $inputs['contractor'];
        $assetDetail->operational_date = $inputs['operational_date'];
        $assetDetail->pipe_diameter = $inputs['pipe_diameter'];
        $assetDetail->network_diameter = $inputs['network_diameter'];
        $assetDetail->description = $inputs['description'];
        $assetDetail->length = $inputs['length'];
        $assetDetail->number_of_valve = $inputs['number_of_valve'];
        $assetDetail->number_of_pipe_bridge = $inputs['number_of_pipe_bridge'];

        return $assetDetail->save();
    }
}