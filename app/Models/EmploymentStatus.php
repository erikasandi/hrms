<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmploymentStatus extends Model
{
    public $timestamps = true;

    protected $fillable = ['name', 'description'];


    public function site()
    {
        return $this->belongsTo(Site::class,'site_id');
    }

}