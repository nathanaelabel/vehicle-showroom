@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h2>Create New Order</h2>

        <form method="POST" action="{{ route('orders.store') }}">
            @csrf

            <div class="mb-3">
                <label for="customer_id" class="form-label">Customer</label>
                <select name="customer_id" id="customer_id" class="form-select">
                    <option value="" selected disabled>Select Customer</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->customer_id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="vehicle_id" class="form-label">Vehicle</label>
                <select name="vehicle_id" id="vehicle_id" class="form-select">
                    <option value="" selected disabled>Select Vehicle</option>
                    @foreach ($vehicles as $vehicle)
                        <option value="{{ $vehicle->vehicle_id }}">{{ $vehicle->type }} - {{ $vehicle->model }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create Order</button>
        </form>
    </div>
@endsection
