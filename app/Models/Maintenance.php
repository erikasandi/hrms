<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable = [ 'asset_id', 'maintenance_type_id', 'description', 'performance', 'maintenance_date' ];

    public function maintenanceType()
    {
        return $this->belongsTo(MaintenanceType::class);
    }

    public function images()
    {
        return $this->hasMany(MaintenanceImage::class);
    }
}
