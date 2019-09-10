<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeAddress extends Model
{

    public $timestamps = true;

    protected $fillable = ['employee_id', 'address', 'city', 'province', 'zipcode', 'status'];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

}
