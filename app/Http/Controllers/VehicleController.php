<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:Car,Motorcycle,Truck',
            'model' => 'required',
            'year' => 'required',
            'passenger_count' => 'required',
            'manufacturer' => 'required',
            'price' => 'required',
        ]);

        // Create the main vehicle record
        $vehicle = Vehicle::create($request->only(['type', 'model', 'year', 'passenger_count', 'manufacturer', 'price']));

        // Create the specific type record based on the selected type
        if ($request->type === 'Car') {
            $vehicle->car()->create($request->only(['fuel_type', 'trunk_size_car']));
        } elseif ($request->type === 'Motorcycle') {
            $vehicle->motorcycle()->create($request->only(['trunk_size_motorcycle', 'fuel_capacity']));
        } elseif ($request->type === 'Truck') {
            $vehicle->truck()->create($request->only(['wheel_count', 'cargo_area_size']));
        }

        return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully');
    }


    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'passenger_count' => 'required',
            'manufacturer' => 'required',
            'price' => 'required',
        ]);

        $vehicle->update($request->all());
        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully');
    }
}
