<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    public $timestamps = false;

    protected $fillable = ['started_at', 'ended_at','title','description','is_off','class'];

    
}