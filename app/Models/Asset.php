<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public $fillable = ['code', 'name', 'location_id', 'asset_type_id'];

    public function detail()
    {
        return $this->belongsTo(AssetDetail::class);
    }

    public function assetType()
    {
        return $this->hasOne(AssetType::class);
    }

    public function location()
    {
        return $this->hasOne(Location::class);
    }

}
