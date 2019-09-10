<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class EmployeeWorkHistory extends Model
{

    public $timestamps = true;

    protected $fillable = ['employee_id', 'company','position','started_at','ended_at','description'];
    
    protected $table = 'employee_work_histories';

}
