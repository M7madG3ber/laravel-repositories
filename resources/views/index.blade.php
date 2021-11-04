@extends('layout')

@section('content')

    <a href="{{ route('orders.create') }}" class="btn btn-primary">Create</a>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>
                        <a href="{{ route('orders.show', $order->id) }}">{{ $order->name }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

@endsection
