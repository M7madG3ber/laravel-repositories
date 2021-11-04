@extends('layout')

@section('content')

    <a href="{{ route('orders.index') }}" class="btn btn-primary">All Orders</a>

    <h4>Order ID: {{ $order->id }}</h4>
    <h4>Order Name: {{ $order->name }}</h4>

@endsection
