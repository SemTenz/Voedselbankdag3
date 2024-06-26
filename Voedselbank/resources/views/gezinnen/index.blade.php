<x-app-layout>
    <div class="container mx-auto p-8 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-3xl text-white mb-6">Overzicht gezinnen met allergieën</h1>

        <form action="{{ route('gezinnen.show') }}" method="POST" class="space-y-4">
            @csrf
            <div class="form-group">
                <label for="allergie" class="block text-white text-lg mb-2">Selecteer allergie:</label>
                <select name="allergie_id" id="allergie"
                    class="form-control w-full p-2 bg-gray-700 border border-gray-600 text-white rounded-md">
                    @foreach ($allergieën as $allergie)
                        <option value="{{ $allergie->id }}">{{ $allergie->naam }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit"
                class="btn btn-primary w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Toon
                Gezinnen</button>
        </form>

        @if (isset($gezinnen))
            @if ($gezinnen->count() > 0)
                <div class="mt-8">
                    <table class="min-w-full divide-y divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Naam
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Omschrijving
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Volwassenen
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Kinderen
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Baby's
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Vertegenwoordiger
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Allergie Details
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-800 divide-y divide-gray-700">
                            @foreach ($gezinnen as $gezin)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                                        {{ $gezin->naam }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                        {{ $gezin->omschrijving }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                        {{ $gezin->aantalvolwassenen }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                        {{ $gezin->aantalkinderen }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                        {{ $gezin->aantalbabys }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                                        {{ $gezin->vertegenwoordiger }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                        {{-- Hier kun je de allergie details weergeven --}}
                                        @foreach ($gezin->allergieën as $allergie)
                                            {{ $allergie->naam }} ({{ $allergie->anafylactischrisico }})<br>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-white mt-4">Geen gezinnen gevonden met de geselecteerde allergie.</p>
            @endif
        @endif
    </div>
</x-app-layout>
