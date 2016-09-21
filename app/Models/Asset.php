<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public $fillable = ['code', 'name', 'location_id', 'asset_type_id'];
    
}
