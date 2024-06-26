<!-- resources/views/gezinnen/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Allergieën in het gezin') }}
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
                                                    {{ $persoon->usertype ?? '-' }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    @php
                                                        $vertegenwoordiger = $gezin->personen->firstWhere(
                                                            'isvertegenwoordiger',
                                                            true,
                                                        );
                                                    @endphp
                                                    @if ($vertegenwoordiger)
                                                        {{ $vertegenwoordiger->voornaam }}
                                                    @else
                                                        Niet Gedefinieerd
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    {{ $persoon->voedselAllergie->first()->naam ?? '-' }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <a href="{{ route('gezinnen.editAllergie', ['gezinId' => $gezin->id, 'persoonId' => $persoon->id]) }}"
                                                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                                        Bewerk
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
