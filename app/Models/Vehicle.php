<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $primaryKey = 'vehicle_id';
    protected $fillable = ['model', 'year', 'passenger_count', 'manufacturer', 'price'];

    // Define relationships
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function motorcycles()
    {
        return $this->hasMany(Motorcycle::class);
    }

    public function trucks()
    {
        return $this->hasMany(Truck::class);
    }
}
