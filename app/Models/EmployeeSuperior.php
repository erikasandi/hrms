<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class EmployeeSuperior extends Model
{

    public $timestamps = true;

    protected $fillable = ['employee_id', 'superior_id', 'note', 'status'];


    public function employee()
    {
        return $this->belongsTo(employee::class,'employee_id');
    }

    public function superior()
    {
        return $this->belongsTo(employee::class,'superior_id');
    }

}
