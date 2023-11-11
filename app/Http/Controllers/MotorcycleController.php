<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motorcycle;

class MotorcycleController extends Controller
{
    public function index()
    {
        $motorcycles = Motorcycle::all();
        return view('motorcycles.index', compact('motorcycles'));
    }

    public function create()
    {
        return view('motorcycles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'passenger_count' => 'required',
            'manufacturer' => 'required',
            'price' => 'required',
            'trunk_size' => 'required',
            'fuel_capacity' => 'required',
        ]);

        Motorcycle::create($request->all());
        return redirect()->route('motorcycles.index')->with('success', 'Motorcycle created successfully');
    }

    public function show(Motorcycle $motorcycle)
    {
        return view('motorcycles.show', compact('motorcycle'));
    }

    public function edit(Motorcycle $motorcycle)
    {
        return view('motorcycles.edit', compact('motorcycle'));
    }

    public function update(Request $request, Motorcycle $motorcycle)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'passenger_count' => 'required',
            'manufacturer' => 'required',
            'price' => 'required',
            'trunk_size' => 'required',
            'fuel_capacity' => 'required',
        ]);

        $motorcycle->update($request->all());
        return redirect()->route('motorcycles.index')->with('success', 'Motorcycle updated successfully');
    }

    public function destroy(Motorcycle $motorcycle)
    {
        $motorcycle->delete();
        return redirect()->route('motorcycles.index')->with('success', 'Motorcycle deleted successfully');
    }
}
