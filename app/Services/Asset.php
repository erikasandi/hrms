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

    public function store(array $inputs)
    {
        $className = $this->getClassHandler($inputs['asset_type_id']);
        $assetClass = new $className($inputs);
        $assetClass->store();
    }

    public function datatableData(array $request)
    {
        $assets = $this->getAssets($request);
        $actions = $this->actionParameters(['edit', 'detail', 'delete']);

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

    private function getAssets($request)
    {
        $model = $this->assetModel->where('id', '>', 0);
        if ($request['s_name']) {
            $model = $model->where('name', 'like', '%' . $request['s_name'] . '%');
        }
        if ($request['s_location']) {
            $model = $model->where('location_id', $request['s_location']);
        }
        if ($request['s_type']) {
            $model = $model->where('asset_type_id', $request['s_type']);
        }

        return $model->get();
    }
}