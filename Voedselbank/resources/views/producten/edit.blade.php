@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Wijzig product</h1>

        <div class="alert-container">
            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <form method="POST" action="{{ route('producten.update', $product->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="houdbaarheid">Houdbaarheidsdatum</label>
                <input type="date" class="form-control" id="houdbaarheid" name="houdbaarheid" value="{{ $product->houdbaarheid->format('Y-m-d') }}" required>
            </div>

            <button type="submit" class="btn btn-primary mb-3">Wijzig Houdbaarheidsdatum</button>
        </form>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('leveranciers.products', $product->leveranciers->first()->id) }}" class="btn btn-secondary">Terug</a>
            <a href="{{ url('dashboard') }}" class="btn btn-secondary">Home</a>
        </div>
    </div>

    <style>
        .alert-container {
            margin-top: 20px;
        }

        .alert {
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .alert-success {
            background-color: #D4EDDA;
            border-color: #C3E6CB;
            color: #155724;
        }

        .alert-danger {
            background-color: #F8D7DA;
            border-color: #F5C6CB;
            color: #721C24;
        }

        .btn-primary {
            background-color: grey;
            color: white;
            border-radius: 5px;
            padding: 10px;
        }

        .btn-secondary {
            background-color: lightblue;
            color: white;
            border-radius: 5px;
            padding: 10px;
        }
    </style>
@endsection
