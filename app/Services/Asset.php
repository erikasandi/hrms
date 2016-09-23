<?php

namespace App\Service;


class Asset
{
    protected $assetType;
    protected $location;
    protected $assetCondition;
    protected $assetPerformance;

    /**
     * Asset constructor.
     * @param $assetType
     */
    public function __construct(AssetType $assetType,
                                Location $location,
                                AssetCondition $assetCondition,
                                AssetPerformance $assetPerformance)
    {
        $this->assetType = $assetType;
        $this->location = $location;
        $this->assetCondition = $assetCondition;
        $this->assetPerformance = $assetPerformance;
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
}