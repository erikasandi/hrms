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
    // Add By Erik 27-12-2016, For GA-->Asset type : Furniture
    public function furnitures()
    {
        return $this->hasMany(FurnitureDetail::class);
    }
    // End Add
}