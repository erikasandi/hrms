<?php

namespace App\Http\Controllers;

use App\Service\Asset;
use App\Service\DatatableGenerator;
use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\Response;

class AssetController extends Controller
{
    protected $assetService;

    /**
     * AssetController constructor.
     * @param $assetTypeService
     */
    public function __construct(Asset $assetService)
    {
        $this->assetService = $assetService;
    }

    public function create()
    {
        $data['location'] = $this->assetService->location()->locationSelect('location_id', null, false);
        $data['assetType'] = $this->assetService->assetType()->assetTypeSelect('asset_type_id');
        $data['assetFormUrl'] = url('/asset/asset-type-form/');

        return view('assets.add', $data);
    }

    public function assetTypeForm($assetType)
    {
        $data['assetType'] = $assetType;
        $data['assetFormUrl'] = url('/asset/asset-type-form/');
        $data['performance'] = $this->assetService->assetPerformance()->assetPerformanceSelect('asset_performance_id');
        $data['condition'] = $this->assetService->assetCondition()->assetConditionSelect('asset_condition_id');
        echo \View::make('assets.asset-type-form', $data)->render();
    }

}
