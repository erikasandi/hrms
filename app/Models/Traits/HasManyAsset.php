<?php

namespace App\Models;

trait HasManyAsset {

    public function mechanicals()
    {
        return $this->hasMany(MechanicalDetail::class);
    }

    public function civils()
    {
        return $this->hasMany(CivilDetail::class);
    }

    public function networkPipes()
    {
        return $this->hasMany(NetworkPipeDetail::class);
    }

}