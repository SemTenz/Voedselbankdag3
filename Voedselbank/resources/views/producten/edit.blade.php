@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="header-title">Wijzig Product</h1>

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
                <label for="houdbaarheid" class="label-title">Houdbaarheidsdatum:</label>
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
        .header-title {
            color: green;
            font-size: 1.5rem;
            font-weight: bold;
        }

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

        .form-group {
            margin-top: 15px;
        }

        .label-title {
            font-size: 1rem;
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            width: calc(100% - 22px);
        }

        .btn-primary {
            background-color: #6c757d;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            border: none;
        }

        .btn-primary:hover {
            background-color: #5a6268;
        }

        .btn-secondary {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #0056b3;
        }

        .d-flex {
            margin-top: 15px;
        }

        .btn {
            margin: 0 5px;
        }
    </style>
@endsection
