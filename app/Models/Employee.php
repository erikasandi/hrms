<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;

    protected $fillable = ['code', 'firstname', 'lastname', 'place_of_birth', 'date_of_birth', 'gender_id', 'phone', 'phone_other', 'email', 'email_other', 'npwp_number', 'jamsostek_number', 'join_date', 'work_schedule_id', 'work_schedule', 'site_id', 'leave_need_approval'];

    public function employeePosition()
    {
        return $this->hasOne(EmployeePosition::class);
    }

    public function employeeSuperior()
    {
        return $this->hasOne(EmployeeSuperior::class);
    }

    public function employeeGender()
    {
    	return $this->belongsTo(Gender::class,'gender_id');
    }

    public function employeeStatus()
    {
    	return $this->belongsTo(EmploymentStatus::class,'status');
    }

    public function employeemaritalStatus()
    {
        return $this->hasOne(EmployeeMaritalStatus::class);
    }

    public function employeeAddress()
    {
        return $this->belongsTo(EmployeeAddress::class,'id','employee_id');
    }

    public function employeeReligion()
    {
        return $this->hasOne(EmployeeReligion::class);
    }

    public function employeeEmploymentStatus()
    {
        return $this->belongsTo(EmployeeEmploymentStatus::class,'id','employee_id');
    }
}