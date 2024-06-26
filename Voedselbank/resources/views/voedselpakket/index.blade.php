<x-app-layout>
    <div class="overflow-x-auto mt-6 flex justify-center">
        <div class="w-4/5">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">Acties</th>
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
                        <td class="py-4 px-6">{{ $pakket->aantalproducten }}</td>
                        <td class="py-4 px-6">
                            <a href="{{ route('voedselpakket.edit', $pakket->id) }}" class="text-blue-600 hover:text-blue-900 transition duration-300 ease-in-out">Bewerk</a>
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