<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class CivilDetail extends Model
{
    use PerformanceCondition;

    protected $guarded = ['id'];
    protected $table = 'asset_civil_details';

    public $timestamps = false;

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    public function setConstructionDateAttribute($value)
    {
        if ($value) {
            $this->attributes['construction_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
        }
    }
}
