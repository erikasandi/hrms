<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    public $timestamps = false;

    public $fillable = ['user_id', 'avatar_thumbnail', 'avatar', 'mobile_phone'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
