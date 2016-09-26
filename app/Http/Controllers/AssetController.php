<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssetStore;
use App\Service\Asset;
use App\Service\DataMessage;
use App\Service\DatatableGenerator;
use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\HttpFoundation\Response;

class AssetController extends Controller
{
    use DataMessage;

    protected $assetService;

    /**
     * AssetController constructor.
     * @param $assetTypeService
     */
    public function __construct(Asset $assetService)
    {
        $this->assetService = $assetService;
    }

    public function index()
    {
        $data = [];
        return view('assets.list', $data);
    }

    public function anyData()
    {
        return $this->assetService->datatableData();
    }

    public function create()
    {
        $data['location'] = $this->assetService->location()->locationNestedSelect('location_id', null, false);
        $data['assetType'] = $this->assetService->assetType()->assetTypeSelect('asset_type_id');
        $data['assetFormUrl'] = url('/asset/asset-type-form/');

        return view('assets.add', $data);
    }

    public function store(AssetStore $request)
    {
        $this->assetService->store($request->except(['_token']));

        return redirect('/asset')->with($this->getMessage('store'));
    }

    public function detail()
    {
        return 'detail';
    }

    public function edit(Request $request, $id)
    {
        return 'edit';
    }

    public function destroy($id)
    {
        return redirect('/asset')->with(['message' => 'Delete button is executed.']);
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
