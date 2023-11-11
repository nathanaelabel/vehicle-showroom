<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    protected $fillable = ['model', 'year', 'passenger_count', 'manufacturer', 'price', 'wheel_count', 'cargo_area_size'];

    // Define relationships
    // A truck can have many orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
