<?php

namespace App\Models;

trait PerformanceCondition {

    public function assetPerformance()
    {
        return $this->belongsTo(AssetPerformance::class);
    }

    public function assetCondition()
    {
        return $this->belongsTo(AssetCondition::class);
    }

}