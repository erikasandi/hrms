<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class EmployeeEducationHistory extends Model
{

    public $timestamps = true;

    protected $fillable = ['employee_id', 'place','score','started_at','ended_at','description','education_grade_id'];

    protected $table = 'employee_education_histories';

    public function educationGrade()
    {
        return $this->belongsTo(EducationGrade::class,'education_grade_id');
    }

}
