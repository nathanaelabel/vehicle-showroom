@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h2>Edit Vehicle</h2>

        <form method="POST" action="{{ route('vehicles.update', $vehicle->vehicle_id) }}">
            @csrf
            @method('PUT')

            <!-- Common Vehicle Fields -->
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select name="type" id="type" class="form-select" disabled>
                    <option value="{{ $vehicle->type }}" selected>{{ $vehicle->type }}</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ $vehicle->model }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" class="form-control" id="year" name="year" value="{{ $vehicle->year }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="passenger_count" class="form-label">Passenger Count</label>
                <input type="number" class="form-control" id="passenger_count" name="passenger_count"
                    value="{{ $vehicle->passenger_count }}" required>
            </div>

            <div class="mb-3">
                <label for="manufacturer" class="form-label">Manufacturer</label>
                <input type="text" class="form-control" id="manufacturer" name="manufacturer"
                    value="{{ $vehicle->manufacturer }}" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $vehicle->price }}"
                    required>
            </div>

            <!-- Additional Fields Based on Vehicle Type -->
            @if ($vehicle->type === 'Car')
                <div class="mb-3">
                    <label for="fuel_type" class="form-label">Fuel Type</label>
                    <select name="fuel_type" id="fuel_type" class="form-select">
                        <option value="" selected disabled>Select Type</option>
                        <option value="Gasoline" {{ $vehicle->car->fuel_type == 'Gasoline' ? 'selected' : '' }}>Gasoline
                        </option>
                        <option value="Diesel" {{ $vehicle->car->fuel_type == 'Diesel' ? 'selected' : '' }}>Diesel</option>
                        <option value="Electric" {{ $vehicle->car->fuel_type == 'Electric' ? 'selected' : '' }}>Electric
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="trunk_size_car" class="form-label">Trunk Size</label>
                    <input type="number" class="form-control" id="trunk_size_car" name="trunk_size_car"
                        value="{{ $vehicle->car->trunk_size_car }}" step="0.01">
                </div>
            @elseif($vehicle->type === 'Motorcycle')
                <div class="mb-3">
                    <label for="trunk_size_motorcycle" class="form-label">Trunk Size</label>
                    <input type="number" class="form-control" id="trunk_size_motorcycle" name="trunk_size_motorcycle"
                        step="0.01" value="{{ $vehicle->motorcycle->trunk_size_motorcycle }}">
                </div>

                <div class="mb-3">
                    <label for="fuel_capacity" class="form-label">Fuel Capacity</label>
                    <input type="number" class="form-control" id="fuel_capacity" name="fuel_capacity" step="0.01"
                        value="{{ $vehicle->motorcycle->fuel_capacity }}">
                </div>
            @elseif($vehicle->type === 'Truck')
                <div class="mb-3">
                    <label for="wheel_count" class="form-label">Wheel Count</label>
                    <input type="number" class="form-control" id="wheel_count" name="wheel_count"
                        value="{{ $vehicle->truck->wheel_count }}">
                </div>

                <div class="mb-3">
                    <label for="cargo_area_size" class="form-label">Cargo Area Size</label>
                    <input type="number" class="form-control" id="cargo_area_size" name="cargo_area_size"
                        value="{{ $vehicle->truck->cargo_area_size }}">
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Update Vehicle</button>
        </form>
    </div>
@endsection
