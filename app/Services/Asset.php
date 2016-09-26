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

    public function store(array $inputs)
    {
        $className = $this->getClassHandler($inputs['asset_type_id']);
        $assetClass = new $className($inputs);
        $assetClass->store();
    }

    public function datatableData()
    {
        $assets = $this->getAssets();
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

    private function getAssets()
    {
        return $this->assetModel->all();
    }
}