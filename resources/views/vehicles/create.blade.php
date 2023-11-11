@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h2>Create New Vehicle</h2>

        <form method="POST" action="{{ route('vehicles.store') }}" id="createVehicleForm">
            @csrf

            <!-- Common Vehicle Fields -->
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select name="type" id="type" class="form-select">
                    <option value="" selected disabled>Select Type</option>
                    <option value="Car">Car</option>
                    <option value="Motorcycle">Motorcycle</option>
                    <option value="Truck">Truck</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" id="model" name="model" required>
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" class="form-control" id="year" name="year" required>
            </div>

            <div class="mb-3">
                <label for="passenger_count" class="form-label">Passenger Count</label>
                <input type="number" class="form-control" id="passenger_count" name="passenger_count" required>
            </div>

            <div class="mb-3">
                <label for="manufacturer" class="form-label">Manufacturer</label>
                <input type="text" class="form-control" id="manufacturer" name="manufacturer" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <!-- Car Fields -->
            <div id="carFields" style="display: none;">
                <div class="mb-3">
                    <label for="fuel_type" class="form-label">Fuel Type</label>
                    <select name="fuel_type" id="fuel_type" class="form-select">
                        <option value="" selected disabled>Select Type</option>
                        <option value="Gasoline">Gasoline</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Electric">Electric</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="trunk_size_car" class="form-label">Trunk Size</label>
                    <input type="number" class="form-control" id="trunk_size_car" name="trunk_size_car" step="0.01">
                </div>
            </div>

            <!-- Motorcycle Fields -->
            <div id="motorcycleFields" style="display: none;">
                <div class="mb-3">
                    <label for="trunk_size_motorcycle" class="form-label">Trunk Size</label>
                    <input type="number" class="form-control" id="trunk_size_motorcycle" name="trunk_size_motorcycle"
                        step="0.01">
                </div>

                <div class="mb-3">
                    <label for="fuel_capacity" class="form-label">Fuel Capacity</label>
                    <input type="number" class="form-control" id="fuel_capacity" name="fuel_capacity" step="0.01">
                </div>
            </div>

            <!-- Truck Fields -->
            <div id="truckFields" style="display: none;">
                <div class="mb-3">
                    <label for="wheel_count" class="form-label">Wheel Count</label>
                    <input type="number" class="form-control" id="wheel_count" name="wheel_count">
                </div>

                <div class="mb-3">
                    <label for="cargo_area_size" class="form-label">Cargo Area Size</label>
                    <input type="number" class="form-control" id="cargo_area_size" name="cargo_area_size">
                </div>
            </div>

            <button type="submit" class="btn btn-primary mb-4" onclick="submitForm()">Create Vehicle</button>
        </form>
    </div>

    <script>
        function submitForm() {
            // Manually submit the form
            document.getElementById('createVehicleForm').submit();
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Show/hide fields based on the selected vehicle type
            document.getElementById('type').addEventListener('change', function() {
                console.log('Selected type:', this.value);
                const carFields = document.getElementById('carFields');
                const motorcycleFields = document.getElementById('motorcycleFields');
                const truckFields = document.getElementById('truckFields');

                carFields.style.display = 'none';
                motorcycleFields.style.display = 'none';
                truckFields.style.display = 'none';

                const selectedType = this.value;

                if (selectedType === 'Car') {
                    carFields.style.display = 'block';
                } else if (selectedType === 'Motorcycle') {
                    motorcycleFields.style.display = 'block';
                } else if (selectedType === 'Truck') {
                    truckFields.style.display = 'block';
                }
            });
        });
    </script>
@endsection
