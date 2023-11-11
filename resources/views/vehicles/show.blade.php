@extends('layouts.main')

@section('content')
    <div class="container mt-4">

        <h2 class="float-left mb-4">Vehicle Details</h2>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $vehicle->vehicle_id }}</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>{{ $vehicle->type }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ $vehicle->model }}</td>
            </tr>
            <tr>
                <th>Year</th>
                <td>{{ $vehicle->year }}</td>
            </tr>
            <tr>
                <th>Passenger Count</th>
                <td>{{ $vehicle->passenger_count }}</td>
            </tr>
            <tr>
                <th>Manufacturer</th>
                <td>{{ $vehicle->manufacturer }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ $vehicle->price }}</td>
            </tr>

            {{-- Show details based on vehicle type --}}
            @if ($vehicle->type == 'Car' && $vehicle->car)
                <tr>
                    <th>Fuel Type</th>
                    <td>{{ $vehicle->car->fuel_type }}</td>
                </tr>
                <tr>
                    <th>Trunk Size</th>
                    <td>{{ $vehicle->car->trunk_size_car }}</td>
                </tr>
            @elseif ($vehicle->type == 'Motorcycle' && $vehicle->motorcycle)
                <tr>
                    <th>Trunk Size</th>
                    <td>{{ $vehicle->motorcycle->trunk_size_motorcycle }}</td>
                </tr>
                <tr>
                    <th>Fuel Capacity</th>
                    <td>{{ $vehicle->motorcycle->fuel_capacity }}</td>
                </tr>
            @elseif ($vehicle->type == 'Truck' && $vehicle->truck)
                <tr>
                    <th>Wheel Count</th>
                    <td>{{ $vehicle->truck->wheel_count }}</td>
                </tr>
                <tr>
                    <th>Cargo Area Size</th>
                    <td>{{ $vehicle->truck->cargo_area_size }}</td>
                </tr>
            @endif
        </table>
    </div>
@endsection
