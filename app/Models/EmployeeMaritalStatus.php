<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class EmployeeMaritalStatus extends Model
{

    public $timestamps = true;

    protected $table = 'employee_marital_statuses';

    protected $fillable = ['employee_id', 'marital_status_id', 'note', 'status'];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }

    public function marital()
    {
        return $this->belongsTo(MaritalStatus::class,'marital_status_id');
    }

}
