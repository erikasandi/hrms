<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'description', 'parent_id', 'image_path'];
}
