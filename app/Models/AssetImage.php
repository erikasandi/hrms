<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetImage extends Model
{
    protected $fillable = ['asset_id', 'title', 'path'];
    public $timestamps = false;

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}
