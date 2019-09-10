<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkSchedule extends Model
{
    public $timestamps = false;

    protected $fillable = ['title','started_at','ended_at', 'description'];
}