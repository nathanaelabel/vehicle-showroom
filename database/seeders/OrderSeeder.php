<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Vehicle;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $customersCount = Customer::count();
        $vehiclesCount = Vehicle::count();

        // Ensure there are customers and vehicles
        if ($customersCount > 0 && $vehiclesCount > 0) {
            // Fetch all customers and vehicles
            $customers = Customer::all();
            $vehicles = Vehicle::all();

            // Seed Orders
            foreach ($customers as $customer) {
                $vehicle = $vehicles->random(); // Random vehicle for each customer

                Order::create([
                    'customer_id' => $customer->id,
                    'vehicle_id' => $vehicle->id,
                ]);
            }
        } else {
            $this->command->info('No customers or vehicles found. Skipping Order seeding.');
        }
    }
}
