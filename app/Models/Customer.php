<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'customer_id';
    protected $fillable = ['name', 'address', 'phone_number', 'id_card'];

    // Define relationships
    // A customer can have many orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
