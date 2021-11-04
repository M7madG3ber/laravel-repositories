@extends('layout')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('orders.store') }}" method="POST">

        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter order name..." class="form-control" required
                value="{{ old('name') }}">
        </div>

        <button class="btn btn-primary" type="submit">Save</button>

    </form>

@endsection
