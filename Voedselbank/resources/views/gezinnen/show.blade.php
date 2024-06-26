<!-- resources/views/gezinnen/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gezinnen Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                <!-- Header voor gezinnen met allergie -->
                <h1>Gezinnen met allergie: {{ $allergie->naam ?? 'N/A' }}</h1>

                <!-- Gezinnen lijst -->
                @if (isset($gezinnen) && count($gezinnen) > 0)
                    <ul>
                        @foreach ($gezinnen as $gezin)
                            <li>
                                {{ $gezin->naam }} - {{ $gezin->omschrijving }}
                                <!-- Knop om naar de show pagina van dit gezin te gaan -->
                                <a href="{{ route('gezinnen.show', ['gezinId' => $gezin->id, 'allergie_id' => $allergie->id]) }}"
                                    class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    Toon Gezin Details
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>Er zijn geen gezinnen bekend die de geselecteerde allergie hebben.</p>
                @endif

                <!-- Voor elke persoon in het gezin -->
                @if (isset($gezin))
                    <h2>{{ $gezin->naam }} Personen:</h2>
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Naam</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Type Persoon</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Gezinsrol</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Allergie</th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Wijzig Allergie</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gezin->personen as $persoon)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $persoon->naam }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $persoon->type }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $persoon->gezinsrol }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        {{ $persoon->voedselAllergie ? $persoon->voedselAllergie->naam : '-' }}
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <!-- Knop om de allergie van een persoon te wijzigen -->
                                        <button onclick="editAllergie({{ $persoon->id }})"
                                            class="ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                            Wijzig
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

            </div>
        </div>
    </div>

    <script>
        function editAllergie(persoonId) {
            console.log('Wijzig allergie voor persoon met ID:', persoonId);
        }
    </script>
</x-app-layout>
