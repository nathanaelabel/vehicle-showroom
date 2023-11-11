<?php

namespace App\Models;

class Car extends Vehicle
{
    protected $fillable = ['fuel_type', 'trunk_size'];

    // Define relationships
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
