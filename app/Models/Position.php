<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'description','division_id'];

    public function site()
    {
        return $this->belongsTo(Site::class,'site_id');
    }

    public function division()
    {
        return $this->belongsTo(Division::class,'division_id');
    }
    /*
    public function employeePosition()
    {
        return $this->belongsTo(EmployeePosition::class);
    }
    */
    public function employeePositions()
    {
        return $this->hasMany(EmployeePosition::class);
    }
}