@extends('layouts.main')

@section('content')
    <div class="container mt-4">

        <h2 class="float-left">Vehicle List</h2>

        <a href="{{ route('vehicles.create') }}" class="btn btn-success float-right mb-3">New Vehicle</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Model</th>
                    <th>Year</th>
                    <th>Passenger Count</th>
                    <th>Manufacturer</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($vehicles as $vehicle)
                    <tr>
                        <td>{{ $vehicle->vehicle_id }}</td>
                        <td>{{ $vehicle->type }}</td>
                        <td>{{ $vehicle->model }}</td>
                        <td>{{ $vehicle->year }}</td>
                        <td>{{ $vehicle->passenger_count }}</td>
                        <td>{{ $vehicle->manufacturer }}</td>
                        <td>{{ $vehicle->price }}</td>
                        <td>
                            <a href="{{ route('vehicles.show', $vehicle->vehicle_id) }}"
                                class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('vehicles.edit', $vehicle->vehicle_id) }}" class="btn btn-info btn-sm">Edit</a>

                            <form action="{{ route('vehicles.destroy', $vehicle->vehicle_id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No vehicles found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
