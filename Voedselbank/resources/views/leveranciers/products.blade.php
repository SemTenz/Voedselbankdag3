@extends('layouts.app')

@section('content')
    <style>
        .header {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #6aa84f;
            background-color: white;
            border-bottom: 2px solid black;
            padding: 10px;
            text-align: left;
        }

        .card {
            border: 1px solid #dee2e6;
            margin-bottom: 20px;
        }

        .card-body {
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .item {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .label {
            font-weight: bold;
            width: 150px;
            margin-right: 10px;
        }

        .value {
            flex: 1;
        }

        .alert {
            background-color: #F3E2AF;
            border-color: #c8b783;
            color: #c8b783;
            border-radius: 10px;
            text-align: center;
            padding: 10px;
        }

        .table-responsive {
            margin-top: 40px;
        }

        .table-responsive table {
            width: 100%;
            text-align: center;
        }

        .table-responsive thead th {
            font-weight: bold;
            padding: 15px;
            background-color: white;
            color: black;
        }

        .table-responsive tbody td {
            padding: 15px;
            border: 1px solid #dee2e6;
        }

        .btn-primary {
            background-color: #2986cc;
            color: white;
            border-radius: 10px;
            padding: 10px 20px;
        }

        .btn-secondary {
            background-color: #2986cc;
            color: white;
            border-radius: 10px;
            padding: 10px 20px;
        }
    </style>

    <div class="container">
        <h1 class="header">Overzicht Leverancier</h1>
        
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="item">
                            <span class="label">Naam:</span>
                            <span class="value">{{ $leverancier->naam }}</span>
                        </div>
                        <div class="item">
                            <span class="label">Leveranciernummer:</span>
                            <span class="value">{{ $leverancier->leverancier_nummer }}</span>
                        </div>
                        <div class="item">
                            <span class="label">LeverancierType:</span>
                            <span class="value">{{ $leverancier->leverancier_type }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-4">
            <div class="col-md-10">
                @if($leverancier->products->isEmpty())
                    <div class="alert" role="alert">
                        Geen producten gevonden voor deze leverancier.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Naam</th>
                                    <th scope="col">Soort allergie</th>
                                    <th scope="col">Barcode</th>
                                    <th scope="col">Houdbaarheid</th>
                                    <th scope="col">Wijzig Product</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($leverancier->products as $product)
                                    <tr>
                                        <td>{{ $product->naam }}</td>
                                        <td>{{ $product->soort_allergie ?? 'Geen allergie informatie' }}</td>
                                        <td>{{ $product->barcode }}</td>
                                        <td>{{ \Carbon\Carbon::parse($product->houdbaarheid)->format('d-m-Y') }}</td>
                                        <td>
                                            <a href="{{ route('producten.edit', $product->id) }}" class="btn btn-sm btn-primary">Wijzig Product</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <a href="{{ route('leveranciers.index') }}" class="btn btn-primary">Terug naar Leveranciers</a>
                <a href="{{ url('dashboard') }}" class="btn btn-secondary ml-2">Home</a>
            </div>
        </div>
    </div>
@endsection
