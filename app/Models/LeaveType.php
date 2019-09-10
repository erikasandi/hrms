<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveType extends Model
{
    public $timestamps = false;

    protected $fillable = ['type', 'quota','period', 'use_calendar'];

}