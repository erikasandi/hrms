<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class NetworkPipeDetail extends Model
{
    use PerformanceCondition;

    protected $guarded = ['id'];
    protected $table = 'asset_network_pipe_details';

    public $timestamps = false;

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    public function setOperationalDateAttribute($value)
    {
        if ($value != '') {
            $this->attributes['operational_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
        }
    }
}
