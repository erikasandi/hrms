<?php

namespace App\Service;


use App\Models\Asset as AssetModel;

class Asset
{
    use DatatableParameters;

    protected $baseUrl = 'asset';

    protected $assetType;
    protected $location;
    protected $assetCondition;
    protected $assetPerformance;
    private $assetModel;

    /**
     * Asset constructor.
     * @param AssetType $assetType
     * @param Location $location
     * @param AssetCondition $assetCondition
     * @param AssetPerformance $assetPerformance
     * @param AssetModel $assetModel
     */
    public function __construct(AssetType $assetType,
                                Location $location,
                                AssetCondition $assetCondition,
                                AssetPerformance $assetPerformance,
                                AssetModel $assetModel)
    {
        $this->assetType = $assetType;
        $this->location = $location;
        $this->assetCondition = $assetCondition;
        $this->assetPerformance = $assetPerformance;
        $this->assetModel = $assetModel;
    }

    public function assetType()
    {
        return $this->assetType;
    }

    public function location()
    {
        return $this->location;
    }

    public function assetCondition()
    {
        return $this->assetCondition;
    }

    public function assetPerformance()
    {
        return $this->assetPerformance;
    }

    public function getAssetById($assetId)
    {
        return AssetModel::find($assetId);
    }

    public function groupedDatatableData(array $request)
    {
        $group = $request['group'];
        $this->baseUrl = 'asset-by-group/' . $group;
        $assets = $this->getAssets($request);
        $actions = $this->actionParameters(['edit', 'detail', 'delete']);
        $actions['maintenance'] = [
            'title'     => 'Maintenance',
            'link'      => url('asset-by-group/' . $group . '/%s/detail/#tab_maintenances'),
            'class'     => 'btn btn-xs btn-default',
            'icon'      => ''
        ];

        return (new DatatableGenerator($assets))
            ->addActions($actions)
            ->addColumn('type', function($asset) {
                return $this->getType($asset);
            })
            ->addColumn('location', function($asset) {
                return $this->getLocation($asset);
            })
            ->generate();
    }

    public function datatableData(array $request)
    {
        $assets = $this->getAssets($request);
        $actions = $this->actionParameters(['edit', 'detail', 'delete']);
        $actions['maintenance'] = [
            'title'     => 'Maintenance',
            'link'      => url('asset/%s/detail/#tab_maintenances'),
            'class'     => 'btn btn-xs btn-default',
            'icon'      => ''
        ];

        return (new DatatableGenerator($assets))
            ->addActions($actions)
            ->addColumn('type', function($asset) {
                return $this->getType($asset);
            })
            ->addColumn('location', function($asset) {
                return $this->getLocation($asset);
            })
            ->generate();
    }

    public function store(array $inputs)
    {
        $className = $this->getClassHandler($inputs['asset_type_id']);
        $assetClass = new $className();
        $assetClass->store($inputs);
    }

    public function update($id, array $inputs)
    {
        $asset = $this->getAssetById($id);
        $className = $this->getClassHandler($asset->asset_type_id);
        $assetClass = new $className();
        $assetClass->update($id, $inputs);
    }

    private function getClassHandler($assetTypeId)
    {
        return '\App\Service\\' . $this->assetType->getAssetTypeById($assetTypeId)->class_name;
    }

    private function getType($asset)
    {
        return $asset->assetType->name;
    }

    private function getLocation($asset)
    {
        return $asset->location->name;
    }

    public function getAssets($request)
    {
        $model = $this->assetModel->where('id', '>', 0);
        if ($request['s_name']) {
            $model = $model->where('name', 'like', '%' . $request['s_name'] . '%');
        }
        if ($request['s_location']) {
            $locations = $this->getAllNestedLocations($request['s_location']);
            $locations = explode(",", $locations);
            $model = $model->whereIn('location_id', $locations);
        }
        if ($request['s_type']) {
            $model = $model->where('asset_type_id', $request['s_type']);
        }

        return $model->get();
    }

    public function destroy($id)
    {
        $asset = AssetModel::find($id);
        $asset->detail()->delete();
        $asset->images()->delete();
        $asset->delete();
    }

    private function getAllNestedLocations($location, $result = '')
    {
        $loc = $this->location()->getLocationById($location);

        $children = $loc->children()->get();

        $result .= ( $result == '' ? $loc->id : ',' . $loc->id );

        if (count($children) > 0) {
            foreach ($children as $child) {
                $result = $this->getAllNestedLocations($child->id, $result);
            }
        }

        return $result;
    }


}