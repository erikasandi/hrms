<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeavePeriod extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['name', 'started_date','ended_date'];

}