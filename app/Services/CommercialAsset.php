<?php

namespace App\Service;


class CommercialAsset
{
    /**
     * CommercialAsset constructor.
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
                'address', 'gps_location', 'pic', 'phone', 'status', 'line_of_business',
                'serial_number', 'brand', 'size', 'install_date', 'meter_digit'
            ]
        );

        $params = [];
        if ($assetParams['address'] != '') {
            $params['address'] = $assetParams['address'];
        }

        if ($assetParams['gps_location'] != '') {
            $params['gps_location'] = $assetParams['gps_location'];
        }

        if ($assetParams['pic'] != '') {
            $params['pic'] = $assetParams['pic'];
        }

        if ($assetParams['phone'] != '') {
            $params['phone'] = $assetParams['phone'];
        }

        if ($assetParams['status'] != '') {
            $params['status'] = $assetParams['status'];
        }

        if ($assetParams['line_of_business'] != '') {
            $params['line_of_business'] = $assetParams['line_of_business'];
        }

        if ($assetParams['serial_number'] != '') {
            $params['serial_number'] = $assetParams['serial_number'];
        }

        if ($assetParams['brand'] != '') {
            $params['brand'] = $assetParams['brand'];
        }

        if ($assetParams['size'] != '') {
            $params['size'] = $assetParams['size'];
        }

        if ($assetParams['install_date'] != '') {
            $params['install_date'] = $assetParams['install_date'];
        }

        if ($assetParams['meter_digit'] != '') {
            $params['meter_digit'] = $assetParams['meter_digit'];
        }

        return $asset->detail()->create($assetParams);
    }

    function update($id, array $inputs)
    {
        $asset = $this->updateAsset($id, $inputs);

        $assetDetail = $asset->detail;
        $assetDetail->address = $inputs['address'];
        $assetDetail->gps_location = $inputs['gps_location'];
        $assetDetail->pic = $inputs['pic'];
        $assetDetail->phone = $inputs['phone'];
        $assetDetail->status = $inputs['status'];
        $assetDetail->line_of_business = $inputs['line_of_business'];
        $assetDetail->serial_number = $inputs['serial_number'];
        $assetDetail->brand = $inputs['brand'];
        $assetDetail->size = $inputs['size'];
        $assetDetail->install_date = $inputs['install_date'];
        $assetDetail->meter_digit = $inputs['meter_digit'];

        return $assetDetail->save();
    }
}