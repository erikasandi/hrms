<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class EducationGrade extends Model
{

    public $timestamps = false;

    protected $fillable = ['name', 'description'];

    protected $table = 'education_grades';

    public function employeeEducationHistories()
    {
        return $this->belongsTo(EmployeeEducationHistory::class);
    }

}
