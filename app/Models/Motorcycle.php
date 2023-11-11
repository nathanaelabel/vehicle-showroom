<?php

namespace App\Models;

class Motorcycle extends Vehicle
{
    protected $fillable = ['trunk_size', 'fuel_capacity'];

    // Define relationships
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
