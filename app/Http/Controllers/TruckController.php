<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;

class TruckController extends Controller
{
    public function index()
    {
        $trucks = Truck::all();
        return view('trucks.index', compact('trucks'));
    }

    public function create()
    {
        return view('trucks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'passenger_count' => 'required',
            'manufacturer' => 'required',
            'price' => 'required',
            'wheel_count' => 'required',
            'cargo_area_size' => 'required',
        ]);

        Truck::create($request->all());
        return redirect()->route('trucks.index')->with('success', 'Truck created successfully');
    }

    public function show(Truck $truck)
    {
        return view('trucks.show', compact('truck'));
    }

    public function edit(Truck $truck)
    {
        return view('trucks.edit', compact('truck'));
    }

    public function update(Request $request, Truck $truck)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'passenger_count' => 'required',
            'manufacturer' => 'required',
            'price' => 'required',
            'wheel_count' => 'required',
            'cargo_area_size' => 'required',
        ]);

        $truck->update($request->all());
        return redirect()->route('trucks.index')->with('success', 'Truck updated successfully');
    }

    public function destroy(Truck $truck)
    {
        $truck->delete();
        return redirect()->route('trucks.index')->with('success', 'Truck deleted successfully');
    }
}
