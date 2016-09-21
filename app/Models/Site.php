<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'description'];

    public function users()
    {
        return $this->belongsToMany(
            config('auth.model') ?: User::class,
            'user_has_sites'
        );
    }
}
