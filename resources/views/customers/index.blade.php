@extends('layouts.main')

@section('content')
    <div class="container mt-4">

        <h2 class="float-left">Customer List</h2>

        <a href="{{ route('customers.create') }}" class="btn btn-success float-right mb-3">New Customer</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>ID Card</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($customers as $customer)
                    <tr>
                        <td>{{ $customer->customer_id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->phone_number }}</td>
                        <td>{{ $customer->id_card }}</td>
                        <td>
                            <a href="{{ route('customers.edit', $customer->customer_id) }}"
                                class="btn btn-info btn-sm">Edit</a>

                            <form action="{{ route('customers.destroy', $customer->customer_id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No customers found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
