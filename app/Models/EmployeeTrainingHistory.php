<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class EmployeeTrainingHistory extends Model
{
    public $timestamps = true;

    protected $table = 'employee_training_histories';
    
    protected $fillable = ['employee_id', 'place','subject','started_at','ended_at','description'];    
}
