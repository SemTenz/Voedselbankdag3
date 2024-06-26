<!-- resources/views/gezinnen/show.blade.php -->
<x-app-layout>
    <div class="container">
        <h1>Gezinnen met allergie: {{ $allergie->naam ?? 'N/A' }}</h1>
        @if (isset($gezinnen) && count($gezinnen) > 0)
            <ul>
                @foreach ($gezinnen as $gezin)
                    <li>{{ $gezin->naam }} - {{ $gezin->omschrijving }}</li>
                @endforeach
            </ul>
        @else
            <p>Er zijn geen gezinnen bekend die de geselecteerde allergie hebben.</p>
        @endif
    </div>
</x-app-layout>
