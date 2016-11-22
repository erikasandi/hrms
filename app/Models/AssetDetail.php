<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class AssetDetail extends Model
{
//    public $fillable = [
//        'asset_id', 'specification', 'serial_number', 'function', 'asset_condition_id',
//        'asset_performance_id', 'install_date', 'construction_date', 'condition_detail',
//        'performance_detail', 'contractor', 'contract', 'operational_date', 'description',
//        'pipe_diameter', 'network_diameter', 'length', 'number_of_valve', 'number_of_pipe_bridge'
//    ];
    protected $guarded = ['id'];

    public $timestamps = false;

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    public function assetPerformance()
    {
        return $this->belongsTo(AssetPerformance::class);
    }

    public function assetCondition()
    {
        return $this->belongsTo(AssetCondition::class);
    }

    public function setInstallDateAttribute($value)
    {
        if ($value != '') {
            $this->attributes['install_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
        }
    }

    public function setOperationalDateAttribute($value)
    {
        if ($value != '') {
            $this->attributes['operational_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
        }
    }

    public function setConstructionDateAttribute($value)
    {
        if ($value) {
            $this->attributes['construction_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
        }
    }
}
