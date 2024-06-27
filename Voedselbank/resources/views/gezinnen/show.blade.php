<!-- resources/views/gezinnen/show.blade.php -->
<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-600 leading-tight">
            {{ __('Allergieen in het gezin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($gezin)
                <!-- Gezinsgegevens -->
                <div class="mb-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                        <h2 class="text-lg font-semibold mb-4">Gezinsgegevens:</h2>
                        <table class="min-w-full">
                            <tbody>
                                <tr>
                                    <td class="px-4 py-3 border-b border-gray-200 bg-white text-sm font-semibold">
                                        Gezinsnaam:
                                    </td>
                                    <td class="px-4 py-3 border-b border-gray-200 bg-white text-sm">
                                        {{ $gezin->naam ?? '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 border-b border-gray-200 bg-white text-sm font-semibold">
                                        Omschrijving:
                                    </td>
                                    <td class="px-4 py-3 border-b border-gray-200 bg-white text-sm">
                                        {{ $gezin->omschrijving ?? '-' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 border-b border-gray-200 bg-white text-sm font-semibold">
                                        Totaal aantal personen:
                                    </td>
                                    <td class="px-4 py-3 border-b border-gray-200 bg-white text-sm">
                                        {{ $gezin->aantalvolwassenen + $gezin->aantalkinderen + $gezin->aantalbabys ?? '-' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Personen Tabel -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-8 p-6">
                    <h2 class="text-lg font-semibold mb-4">{{ $gezin->naam ?? '-' }} Personen:</h2>
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Naam
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Type Persoon
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Gezinsrol
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Allergie
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Wijzig Allergie
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($gezin->personen as $persoon)
                                            <tr>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $persoon->voornaam }} {{ $persoon->tussenvoegsel ?? '' }}
                                                    {{ $persoon->achternaam }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    @php
                                                        // Bereken de leeftijd van de persoon
                                                        $geboortedatum = new DateTime($persoon->geboortedatum);
                                                        $today = new DateTime();
                                                        $leeftijd = $geboortedatum->diff($today)->y;

                                                        // Bepaal het type persoon op basis van leeftijd
                                                        if ($leeftijd > 18) {
                                                            echo 'Volwassene';
                                                        } elseif ($leeftijd > 2) {
                                                            echo 'Kind';
                                                        } else {
                                                            echo 'Baby';
                                                        }
                                                    @endphp
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-500">
                                                    @php
                                                        $vertegenwoordiger = $gezin->personen->firstWhere(
                                                            'isvertegenwoordiger',
                                                            true,
                                                        );
                                                    @endphp
                                                    @if ($vertegenwoordiger && $vertegenwoordiger->id === $persoon->id)
                                                        Vertegenwoordiger
                                                    @else
                                                        lid
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $persoon->voedselAllergie->first()->naam ?? '-' }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-mid">
                                                    <a href="{{ route('gezinnen.editAllergie', ['gezinId' => $gezin->id, 'persoonId' => $persoon->id]) }}"
                                                        class="inline-flex items-center px-4 py-2 border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                                        <i class="bi bi-pencil-square text-blue-500 text-xl -ml-1"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <p>Gezin niet gevonden.</p>
            @endif
        </div>
    </div>
</x-app-layout>
