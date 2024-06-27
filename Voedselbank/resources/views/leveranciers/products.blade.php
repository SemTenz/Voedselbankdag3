@extends('layouts.app')

@section('content')
    <style>
        .header {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: green;
            padding: 10px 0;
            text-align: left;
        }

        .card {
            border: 1px solid #dee2e6;
            margin-bottom: 20px;
        }

        .card-body {
            padding: 15px;
            border-radius: 5px;
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
            background-color: #F8D7DA;
            border-color: #F5C6CB;
            color: #721C24;
            border-radius: 5px;
            text-align: center;
            padding: 10px;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table-responsive table {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }

        .table-responsive thead th {
            font-weight: bold;
            padding: 10px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            text-align: center;
        }

        .table-responsive tbody td {
            padding: 10px;
            border: 1px solid #dee2e6;
            text-align: center;
        }

        .btn-primary {
            background-color: #1e5cad;
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            border: none;
        }

        .btn-secondary {
            background-color: #1e5cad; /* Aangepaste donkerblauwe kleur */
            color: white;
            border-radius: 5px;
            padding: 10px 20px;
            border: none;
        }

        .btn-primary, .btn-secondary {
            margin-top: 10px;
        }

        .mb-4 {
            margin-bottom: 20px !important;
        }
    </style>

    <!-- FontAwesome link voor iconen -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

    <div class="container">
        <h1 class="header">Overzicht Leveranciers</h1>

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
                                        <a href="{{ route('producten.edit', $product->id) }}" class="btn btn-sm btn-primary">
    <i class="fas fa-edit fa-icon" style="color: white;"></i>
</a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>

        <div class="row justify-content-end mb-4"> <!-- Veranderd naar justify-content-end om rechts uit te lijnen -->
            <div class="col-md-6 text-right"> <!-- Veranderd naar text-right om rechts uit te lijnen -->
                <a href="{{ route('leveranciers.index') }}" class="btn btn-secondary">Terug</a> <!-- Tekst aangepast naar "Terug" -->
                <a href="{{ url('dashboard') }}" class="btn btn-secondary ml-2">Home</a>
            </div>
        </div>
    </div>
@endsection
