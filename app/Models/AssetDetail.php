<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetDetail extends Model
{
    public $fillable = ['asset_id', 'specification', 'serial_number', 'function', 'asset_condition_id', 'asset_performance_id', 'install_date', 'construction_date'];

    public function asset()
    {
        return $this->hasOne(Asset::class);
    }

    public function performance()
    {
        return $this->hasOne(AssetPerformance::class);
    }

    public function condition()
    {
        return $this->hasOne(AssetCondition::class);
    }
}
