<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class EmployeePosition extends Model
{

    public $timestamps = true;

    protected $fillable = ['employee_id', 'position_id', 'note', 'status'];

    
    public function employee()
    {
        return $this->belongsTo(employee::class,'employee_id'); 
    }
    
    public function position()
    {
        return $this->belongsTo(Position::class,'position_id');
    }
}

