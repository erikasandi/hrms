<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceImage extends Model
{
    protected $fillable = [ 'maintenance_id', 'file_name', 'description' ];

    public $timestamps = false;

    public function maintenance()
    {
        return $this->belongsTo(Maintenance::class);
    }
}
