<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetPerformance extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'description'];

    public function assetDetails()
    {
        return $this->hasMany(AssetDetail::class);
    }
}
