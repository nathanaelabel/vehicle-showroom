@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h2>Order Details</h2>

        <a href="{{ route('orders.index') }}" class="btn btn-secondary mb-3">Back to Orders</a>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Order ID: {{ $order->order_id }}</h5>
                <p class="card-text"><strong>Customer:</strong>
                    {{ $order->customer ? $order->customer->name : 'Customer not found' }}</p>

                @if ($order->customer)
                    <h5 class="card-title mt-4">Customer Details</h5>
                    <p class="card-text"><strong>Address:</strong> {{ $order->customer->address }}</p>
                    <p class="card-text"><strong>Phone Number:</strong> {{ $order->customer->phone_number }}</p>
                    <p class="card-text"><strong>ID Card:</strong> {{ $order->customer->id_card }}</p>
                @endif

                @if ($order->vehicle)
                    <h5 class="card-title mt-4">Vehicle Details</h5>
                    Type: {{ $order->vehicle->type }}<br>
                    Model: {{ $order->vehicle->model }}<br>
                    Price: {{ $order->vehicle->price }}

                    @if ($order->vehicle->type === 'Car' && $order->vehicle->car)
                        <p class="card-text"><strong>Fuel Type:</strong> {{ $order->vehicle->car->fuel_type }}</p>
                        <p class="card-text"><strong>Trunk Size:</strong> {{ $order->vehicle->car->trunk_size_car }}
                        </p>
                    @elseif ($order->vehicle->type === 'Motorcycle' && $order->vehicle->motorcycle)
                        <p class="card-text"><strong>Trunk Size:</strong>
                            {{ $order->vehicle->motorcycle->trunk_size_motorcycle }}</p>
                        <p class="card-text"><strong>Fuel Capacity:</strong>
                            {{ $order->vehicle->motorcycle->fuel_capacity }}</p>
                    @elseif ($order->vehicle->type === 'Truck' && $order->vehicle->truck)
                        <p class="card-text"><strong>Wheel Count:</strong> {{ $order->vehicle->truck->wheel_count }}
                        </p>
                        <p class="card-text"><strong>Cargo Area Size:</strong>
                            {{ $order->vehicle->truck->cargo_area_size }}</p>
                    @endif
                @else
                    Vehicle not found
                @endif

                <a href="{{ route('orders.edit', $order->order_id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('orders.destroy', $order->order_id) }}" method="POST"
                    style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
