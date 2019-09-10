<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class EmployeeEmploymentStatus extends Model
{

    public $timestamps = true;

    protected $table = 'employee_employment_statuses';

    protected $fillable = ['employee_id', 'employment_status_id', 'note', 'status'];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

    public function employmentStatus()
    {
        return $this->belongsTo(EmploymentStatus::class,'employment_status_id');
    }

}
