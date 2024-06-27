<x-app-layout>
    <link rel="stylesheet" href="style.css">
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white border-b border-gray-200">
                    @error('Banner')
                    <div class="bg-red-500 text-white mt-2 text-sm text-center py-2"> <!-- Change this line -->
                        {{ $message }}
                    </div>
                    @enderror
                    @if (session('status_changed'))
                    <div class="mb-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded shadow">
                        De wijziging is doorgevoerd.
                    </div>
                    <script>
                        setTimeout(function() {
                            window.location.href = "{{ route('klant.index') }}";
                        }, 3000);
                    </script>
                    @endif

                    <form method="POST" action="{{ route('klant.update', $persoon->id) }}">
                        @csrf
                        @method('PUT')


                        <!-- rest of your form -->
                        <div class="mt-1 flex border border-gray-200 rounded">
                            <label for="Voornaam" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Voornaam</label>
                            <input id="Voornaam" class="form-input rounded-none shadow-sm mt-1 block w-1/2 p-2" type="text" name="Voornaam" value="{{$persoon->voornaam}}" required>
                        </div>
                        <div class=" mt-1 flex border border-gray-200 rounded">
                            <label for="Tussenvoegsel" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Tussenvoegsel</label>
                            <input id="Tussenvoegsel" class="form-input rounded-none shadow-sm mt-1 block w-1/2 p-2" value="{{$persoon->tussenvoegsel}}">
                        </div>
                        <div class="mt-1 flex border border-gray-200 rounded">
                            <label for="Achternaam" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Achternaam</label>
                            <input id="Achternaam" class="form-input rounded-none shadow-sm mt-1 block w-1/2 p-2" type="text" name="Achternaam" value="{{$persoon->achternaam}}" required>
                        </div>
                        <div class="mt-1 flex border border-gray-200 rounded">
                            <label for="Geboortedatum" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Geboortedatum</label>
                            <input id="Geboortedatum" class="form-input rounded-none shadow-sm mt-1 block w-1/2 p-2" type="date" name="Geboortedatum" value="{{$persoon->geboortedatum}}" required>
                        </div>
                        <div class="mt-1 flex border border-gray-200 rounded">
                            <label for="TypePersoon" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Type Persoon</label>
                            <input id="TypePersoon" class="form-input bg-blue-200 rounded-none shadow-sm mt-1 block w-1/2 p-2" type="text" name="TypePersoon" value="{{$persoon->TypePersoon}}" required readonly>
                        </div>
                        <div class="mt-1 flex border border-gray-200 rounded">
                            <label for="Vertegenwoordiger" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Vertegenwoordiger</label>
                            <input id="Vertegenwoordiger" class="form-input bg-blue-200 rounded-none shadow-sm mt-1 block w-1/2 p-2" type="text" name="Vertegenwoordiger" value="{{ $persoon->IsVertegenwoordiger == 1 ? 'Ja' : '' }}" required readonly>
                        </div>
                        <div class="mt-1 flex border border-gray-200 rounded">
                            <label for="Straatnaam" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Straatnaam</label>
                            <input id="Straatnaam" class="form-input  rounded-none shadow-sm mt-1 block w-1/2 p-2" type="text" name="Straatnaam" value="{{$contact->Straat}}" required>
                        </div>
                        <div class="mt-1 flex border border-gray-200 rounded">
                            <label for="Huisnummer" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Huisnummer</label>
                            <input id="Huisnummer" class="form-input rounded-none shadow-sm mt-1 block w-1/2 p-2" type="number" name="Huisnummer" value="{{$contact->Huisnummer}}" required>
                        </div>
                        <div class="mt-1 flex border border-gray-200 rounded">
                            <label for="Toevoeging" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Toevoeging</label>
                            <input id="Toevoeging" class="form-input rounded-none shadow-sm mt-1 block w-1/2 p-2" type="text" name="Toevoeging" value="{{$contact->Toevoeging}}">
                        </div>
                        <div class="mt-1 flex border border-gray-200 rounded">
                            <label for="Postcode" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Postcode</label>
                            <input id="Postcode" class="form-input rounded-none shadow-sm mt-1 block w-1/2 p-2" type="text" name="Postcode" value="{{$contact->Postcode}}" required>

                        </div>

                        <input type="hidden" name="gezinId" value="{{$persoon->GezinId}}">


                        @error('Postcode')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="mt-1 flex border border-gray-200 rounded">
                            <label for="Woonplaats" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Woonplaats</label>
                            <input id="Woonplaats" class="form-input rounded-none shadow-sm mt-1 block w-1/2 p-2" type="text" name="Woonplaats" value="{{$contact->Woonplaats}}" required>
                        </div>
                        <div class="mt-1 flex border border-gray-200 rounded">
                            <label for="Email" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Email</label>
                            <input id="Email" class="form-input rounded-none shadow-sm mt-1 block w-1/2 p-2" type="email" name="Email" value="{{$contact->Email}}" required>
                        </div>
                        <div class="mt-1 flex border border-gray-200 rounded">
                            <label for="Mobiel" class="block font-medium text-sm text-gray-700 w-1/2 p-2 border-r border-gray-200">Mobiel</label>
                            <input id="Mobiel" class="form-input rounded-none shadow-sm mt-1 block w-1/2 p-2" type="tel" name="Mobiel" value="{{$contact->Mobiel}}" required>
                        </div>

                        <!-- Add the rest of your input fields here -->

                        <div class=" flex items-center justify-end mt-1">
                            <button type="button" onclick="window.history.back();" class="inline-flex items-center px-2 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                terug
                            </button>
                            <button type="button" onclick="window.location.href='/'" class="inline-flex items-center px-2 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Home
                            </button>
                            <button type="submit" class="inline-flex items-center px-2 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>