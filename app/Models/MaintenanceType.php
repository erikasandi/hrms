<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaintenanceType extends Model
{
    public function maintenances()
    {
        return $this->hasMany(Maintenance::class);
    }
}
