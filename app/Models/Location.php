<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'description', 'parent_id', 'image_path', 'site_id'];

    public function children()
    {
        return $this->hasMany(Location::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }

    public function asset()
    {
        return $this->hasOne(Asset::class);
    }

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function assetTypes()
    {
        return $this->belongsToMany(AssetType::class, 'location_has_asset_types');
    }
}
