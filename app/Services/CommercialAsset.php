<?php

namespace App\Service;


class CommercialAsset extends AssetHandler
{
    public $formTemplate = 'assets.asset-type-forms.commercial';
    public $editFormTemplate = 'assets.asset-type-forms.commercial-edit';
    public $detailTemplate = 'assets.asset-type-details.commercial';
    public $detailRelation = 'commercial';
    
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
                'meter_serial_number', 'meter_brand', 'meter_size', 'meter_install_date', 'meter_digit'
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

        if ($assetParams['meter_serial_number'] != '') {
            $params['serial_number'] = $assetParams['meter_serial_number'];
        }

        if ($assetParams['meter_brand'] != '') {
            $params['brand'] = $assetParams['meter_brand'];
        }

        if ($assetParams['meter_size'] != '') {
            $params['size'] = $assetParams['meter_size'];
        }

        if ($assetParams['meter_install_date'] != '') {
            $params['install_date'] = $assetParams['meter_install_date'];
        }

        if ($assetParams['meter_digit'] != '') {
            $params['meter_digit'] = $assetParams['meter_digit'];
        }

        return $asset->commercial()->create($params);
    }

    function update($id, array $inputs)
    {
        $asset = $this->updateAsset($id, $inputs);

        $assetDetail = $asset->commercial;
        $assetDetail->address = $inputs['address'];
        $assetDetail->gps_location = $inputs['gps_location'];
        $assetDetail->pic = $inputs['pic'];
        $assetDetail->phone = $inputs['phone'];
        $assetDetail->status = $inputs['status'];
        $assetDetail->line_of_business = $inputs['line_of_business'];
        $assetDetail->serial_number = $inputs['meter_serial_number'];
        $assetDetail->brand = $inputs['meter_brand'];
        $assetDetail->size = $inputs['meter_size'];
        $assetDetail->install_date = $inputs['meter_install_date'];
        $assetDetail->meter_digit = $inputs['meter_digit'];

        return $assetDetail->save();
    }
}