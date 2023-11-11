@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h2>Customer Details</h2>

        <div>
            <p><strong>Name:</strong> {{ $customer->name }}</p>
            <p><strong>Address:</strong> {{ $customer->address }}</p>
            <p><strong>Phone Number:</strong> {{ $customer->phone_number }}</p>
            <p><strong>ID Card:</strong> {{ $customer->id_card }}</p>
        </div>

        <div class="mt-3">
            <a href="{{ route('customers.edit', $customer->customer_id) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('customers.destroy', $customer->customer_id) }}" method="POST"
                style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
            </form>
        </div>
    </div>
@endsection
