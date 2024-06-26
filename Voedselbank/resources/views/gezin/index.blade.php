<x-app-layout>
    <div class="overflow-x-auto">
        <h2 class="text-center mt-5 text-white text-xl font-semibold">Overzicht gezinnen met voedselpakketten</h2>
        <div class="flex justify-center mt-5">
            <div class="w-4/5">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">Gezinsnaam</th>
                            <th scope="col" class="py-3 px-6">Omschrijving</th>
                            <th scope="col" class="py-3 px-6">Volwassenen</th>
                            <th scope="col" class="py-3 px-6">Kinderen</th>
                            <th scope="col" class="py-3 px-6">Babys</th>
                            <th scope="col" class="py-3 px-6">Vertegenwoordiger</th>
                            <th scope="col" class="py-3 px-6">Voedselpakket Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gezinnen as $gezin)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $gezin->naam }}</th>
                            <td class="py-4 px-6">{{ $gezin->omschrijving }}</td>
                            <td class="py-4 px-6">{{ $gezin->aantalvolwassenen }}</td>
                            <td class="py-4 px-6">{{ $gezin->aantalkinderen }}</td>
                            <td class="py-4 px-6">{{ $gezin->aantalbabys }}</td>
                            <td class="py-4 px-6">{{ $gezin->isvertegenwoordiger }}</td>
                            <td class="py-4 px-6"><a href="{{ route('voedselpakket.index', $gezin->id) }}" class="text-blue-600 hover:text-blue-900">Details</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex justify-end mt-4">
                    <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Home</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>