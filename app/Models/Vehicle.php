<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $primaryKey = 'vehicle_id';
    protected $fillable = ['type', 'model', 'year', 'passenger_count', 'manufacturer', 'price'];

    // Define relationships
    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function car()
    {
        return $this->hasOne(Car::class, 'vehicle_id', 'vehicle_id');
    }

    public function motorcycle()
    {
        return $this->hasOne(Motorcycle::class, 'vehicle_id', 'vehicle_id');
    }

    public function truck()
    {
        return $this->hasOne(Truck::class, 'vehicle_id', 'vehicle_id');
    }
}
