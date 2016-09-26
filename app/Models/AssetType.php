<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetType extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'description', 'class_name'];

    public function asset()
    {
        return $this->hasOne(Asset::class);
    }
}
