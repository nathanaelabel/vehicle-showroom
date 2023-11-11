<?php

namespace App\Models;

class Truck extends Vehicle
{
    protected $primaryKey = 'truck_id';
    protected $fillable = ['wheel_count', 'cargo_area_size'];

    // Define relationships
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
