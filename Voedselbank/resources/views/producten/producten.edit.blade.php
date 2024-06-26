@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Wijzig product</h1>

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('producten.update', $product->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="houdbaarheid">Houdbaarheidsdatum</label>
                <input type="date" class="form-control" id="houdbaarheid" name="houdbaarheid" value="{{ $product->houdbaarheid->format('Y-m-d') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Wijzig Houdbaarheidsdatum</button>
        </form>
    </div>
@endsection
