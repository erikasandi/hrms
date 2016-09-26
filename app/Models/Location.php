<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'description', 'parent_id', 'image_path'];

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
}
