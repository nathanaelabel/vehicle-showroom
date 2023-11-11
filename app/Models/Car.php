<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['model', 'year', 'passenger_count', 'manufacturer', 'price', 'fuel_type', 'trunk_size'];

    // Define relationships
    // A car can have many orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
