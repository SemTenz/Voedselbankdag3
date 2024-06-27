<x-app-layout>
    <div class="overflow-x-auto">
        <h2 class="text-center mt-5 text-white text-xl font-semibold">Overzicht gezinnen met voedselpakketten</h2>
        <div class="flex justify-center mt-5">
            <div class="w-4/5">
                <div class="flex justify-end mb-4">
                    <form action="{{ route('gezin.index') }}" method="GET" class="flex items-center space-x-2">
                        <select name="eetwens" id="eetwens" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 pr-8">
                            <option value="">Selecteer eetwens</option>
                            <option value="Vegetarisch" @if(request('eetwens') == 'Vegetarisch') selected @endif>Vegetarisch</option>
                            <option value="Veganistisch" @if(request('eetwens') == 'Veganistisch') selected @endif>Veganistisch</option>
                            <option value="GeenVarken" @if(request('eetwens') == 'GeenVarken') selected @endif>Geen varken</option>
                            <option value="Omnivoor" @if(request('eetwens') == 'Omnivoor') selected @endif>Omnivoor</option>
                        </select>
                        <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center">Toon gezinnen</button>
                    </form>
                </div>
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
                            <td class="py-4 px-6">
                                @foreach($gezin->persoon as $persoon)
                                    @if($persoon->isvertegenwoordiger == 1)
                                        {{$persoon->voornaam}}
                                    @endif
                                @endforeach
                            </td>
                            <td class="py-4 px-6"><a href="{{ route('voedselpakket.index', $gezin->id) }}" class="text-blue-600 hover:text-blue-900"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box" viewBox="0 0 16 16">
                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5 8 5.961 14.154 3.5zM15 4.239l-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                              </svg></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if($gezinnen->isEmpty())
    <div class="text-center mt-5">
        <p class="text-lg text-red-500">Er zijn geen gezinnen bekend die de geselecteerde eetwens hebben.</p>
    </div>
@endif
                <div class="flex justify-end mt-4">
                    <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Home</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>