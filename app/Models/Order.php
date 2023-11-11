<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['customer_id', 'car_id', 'motorcycle_id', 'truck_id', 'total_cost'];

    // Define relationships
    // An order belongs to a customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // An order belongs to a car
    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    // An order belongs to a motorcycle
    public function motorcycle()
    {
        return $this->belongsTo(Motorcycle::class);
    }

    // An order belongs to a truck
    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }
}
