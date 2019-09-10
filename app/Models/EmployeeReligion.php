<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class EmployeeReligion extends Model
{

    public $timestamps = true;

    protected $fillable = ['employee_id', 'religion_id', 'note', 'status'];

    public function employee()
    {
        return $this->belongsTo(App\Employee::class,'employee_id');
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class,'religion_id');
    }

}
