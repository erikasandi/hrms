<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveEntitlement extends Model
{
    public $timestamps = true;

    protected $fillable = ['employee_id', 'leave_type_id','leave_period_id', 'from_date', 'to_date', 'balance', 'created_by_id','created_by_name'];


    public function employee()
    {
        return $this->belongsTo(Employee::class,'employee_id');
    }

    public function leaveType()
    {
    	return $this->belongsTo(LeaveType::class,'leave_type_id');
    }
}