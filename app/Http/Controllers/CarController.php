<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'passenger_count' => 'required',
            'manufacturer' => 'required',
            'price' => 'required',
            'fuel_type' => 'required',
            'trunk_size' => 'required',
        ]);

        Car::create($request->all());
        return redirect()->route('cars.index')->with('success', 'Car created successfully');
    }

    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'passenger_count' => 'required',
            'manufacturer' => 'required',
            'price' => 'required',
            'fuel_type' => 'required',
            'trunk_size' => 'required',
        ]);

        $car->update($request->all());
        return redirect()->route('cars.index')->with('success', 'Car updated successfully');
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully');
    }
}
