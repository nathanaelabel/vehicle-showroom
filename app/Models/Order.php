<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'order_id';
    protected $fillable = ['customer_id', 'vehicle_id'];

    // Define relationships
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function vehicles()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
