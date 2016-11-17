<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssetStore;
use App\Service\Asset;
use App\Service\DataMessage;
use App\Service\ImageService;
use App\Service\Location;
use Illuminate\Http\Request;

use App\Http\Requests;

class AssetByGroupController extends Controller
{
    use DataMessage;


    //
    /**
     * @var Asset
     */
    private $assetService;
    /**
     * @var ImageService
     */
    private $imageService;
    /**
     * @var Location
     */
    private $locationService;

    /**
     * AssetByGroupController constructor.
     * @param Asset $assetService
     * @param Location $locationService
     * @param ImageService $imageService
     */
    public function __construct(Asset $assetService, Location $locationService, ImageService $imageService)
    {
        $this->assetService = $assetService;
        $this->imageService = $imageService;
        $this->locationService = $locationService;
    }

    public function index(Request $request, $group = '')
    {
        $location = $this->locationService->getLocationByName($group);
        $sName = '';
        $sType = '';
        if ($request->has('submit')) {
            $sName = $request->input('name');
            $sType = $request->input('asset_type_id');
        }
        $data['sName'] = $sName;
        $data['sType'] = $sType;
        $data['location'] = $location;

        $data['assetType'] = $this->assetService->assetType()->assetTypeSelect('asset_type_id');
        $data['group'] = $group;

        return view('grouped-assets.list', $data);
    }

    public function anyData(Request $request)
    {
        return $this->assetService->groupedDatatableData($request->all());
    }

    public function create($group = '')
    {
        $data['assetType'] = $this->assetService->assetType()->assetTypeSelect('asset_type_id', null, false);
        $location = $this->locationService->getLocationByName($group);
        $data['location'] = $location;
        $data['group'] = $group;
        $data['assetFormUrl'] = url('/asset/asset-type-form/');

        return view('grouped-assets.add', $data);
    }

    public function store(AssetStore $request, $group = '')
    {
        $location = $this->locationService->getLocationByName($group);
        $inputs = $request->except(['_token']);
        $inputs['location_id'] = $location->id;
        $this->assetService->store($inputs);

        return redirect('/asset-by-group/' . $group)->with($this->getMessage('store'));
    }

    public function edit(Request $request, $group = '', $id)
    {
        $location = $this->locationService->getLocationByName($group);
        $asset = $this->assetService->getAssetById($id);
        $images = $asset->images;
        $options = ['disabled' => 'disabled', 'class' => 'form-control', 'id' => 'asset-type'];
        $data['asset'] = $asset;
        $data['assetImages'] = $images;
        $data['assetType'] = $this->assetService->assetType()->assetTypeSelect('asset_type_id', $asset->asset_type_id, false, $options);
        $data['assetFormUrl'] = url('/asset/asset-type-edit-form/' . $asset->id);
        $data['group'] = $group;
        $data['location'] = $location;

        return view('grouped-assets.edit', $data);
    }

    public function update(Request $request, $group = '', $id)
    {
        $location = $this->locationService->getLocationByName($group);
        $inputs = $request->except(['_token']);
        $inputs['location_id'] = $location->id;
        $this->assetService->update($id, $inputs);

        return redirect('asset-by-group/' . $group)->with($this->getMessage('update'));
    }

    public function detail($group = '', $assetId)
    {
        $location = $this->locationService->getLocationByName($group);
        $asset = $this->assetService->getAssetById($assetId);
        $data['assetId'] = $assetId;
        $data['asset'] = $asset;
        $data['location'] = $location;
        $data['group'] = $group;
        return view('grouped-assets.detail', $data);
    }

    public function destroy($group = '', $id)
    {
        $this->assetService->destroy($id);

        return redirect('/asset-by-group/' . $group)->with($this->getMessage('delete'));
    }
}
