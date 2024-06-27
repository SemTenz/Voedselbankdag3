<x-app-layout>
    <div class="overflow-x-auto mt-6 flex justify-center">
        <div class="w-4/5">
            <h2 class="text-center text-xl font-semibold text-gray-900 dark:text-white mb-4">Overzicht voedselpakketten</h2>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">Pakketnummer</th>
                        <th scope="col" class="py-3 px-6">Datum Samenstelling</th>
                        <th scope="col" class="py-3 px-6">Datum Uitgifte</th>
                        <th scope="col" class="py-3 px-6">Status</th>
                        <th scope="col" class="py-3 px-6">Aantal Producten</th>
                        <th scope="col" class="py-3 px-6">Bewerken</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($voedselpakketten as $pakket)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="py-4 px-6">{{ $pakket->id }}</td>
                        <td class="py-4 px-6">{{ $pakket->datumsamenstelling }}</td>
                        <td class="py-4 px-6">{{ $pakket->datumuitgifte ?? 'NVT' }}</td>
                        <td class="py-4 px-6">{{ $pakket->status }}</td>
                        <td class="py-4 px-6">
                            {{ $pakket->productpervoedselpakket->sum('aantalproducteenheden') }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="{{ route('voedselpakket.edit', $pakket->id) }}" class="text-blue-600 hover:text-blue-900 transition duration-300 ease-in-out"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                              </svg></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex justify-end mt-4">
                <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Home</a>
            </div>
        </div>
    </div>
</x-app-layout>