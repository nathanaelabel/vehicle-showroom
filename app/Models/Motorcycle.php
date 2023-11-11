<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    protected $fillable = ['model', 'year', 'passenger_count', 'manufacturer', 'price', 'trunk_size', 'fuel_capacity'];

    // Define relationships
    // A motorcycle can have many orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
