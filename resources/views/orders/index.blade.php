@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h2>Orders</h2>

        <a href="{{ route('orders.create') }}" class="btn btn-success float-right mb-3">Create New Order</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Vehicle Type</th>
                    <th>Vehicle Model</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->order_id }}</td>
                        <td>
                            @if ($order->customer)
                                {{ $order->customer->name }}
                            @else
                                Customer not found
                            @endif
                        </td>
                        <td>
                            @if ($order->vehicle)
                                {{ $order->vehicle->type }}
                            @else
                                Vehicle not found
                            @endif
                        </td>
                        <td>
                            @if ($order->vehicle)
                                {{ $order->vehicle->model }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            @if ($order->vehicle)
                                {{ $order->vehicle->price }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('orders.show', $order->order_id) }}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ route('orders.edit', $order->order_id) }}" class="btn btn-info btn-sm">Edit</a>
                            <form action="{{ route('orders.destroy', $order->order_id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this order?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
