<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'description','site_id'];

    public function site()
    {
        return $this->belongsTo(Site::class,'site_id');
    }
}