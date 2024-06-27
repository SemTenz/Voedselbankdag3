<x-app-layout>
    <!-- Include Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    @if (session('success'))
                    <div id="successModal" class="bg-green-500 text-white text-center py-2 px-4 fixed w-full h-full top-0 left-0 flex items-center justify-center z-50" style="display: none;">
                        <div class="modal-content bg-white p-4 rounded text-black w-1/2">
                            <span id="closeModal" class="float-right cursor-pointer">X</span>
                            <p>{{ session('success') }}</p>
                        </div>
                    </div>
                    @endif
                    <form action="{{ route('klant.search') }}" method="GET" class="flex items-center justify-between text-sm font-semibold my-4">
                        <div class="flex flex-col">
                            <select name="postcode" class="px-4 py-2 border rounded text-black">
                                <option value="">Selecteer postcode...</option>
                                @foreach($postcodes as $postcode)
                                <option value="{{ $postcode }}" {{ request()->input('postcode') == $postcode ? 'selected' : '' }}>
                                    {{ $postcode }}
                                </option>
                                @endforeach
                            </select>
                            <!-- Error message -->
                            @if ($errors->has('postcode'))
                            <div class="mt-2 p-2 bg-red-100 text-red-700 border border-red-400 rounded">
                                <strong>{{ $errors->first('postcode') }}</strong>
                            </div>
                            @endif
                        </div>



                        <!-- Include hidden inputs for sorting if needed -->
                        <input type="hidden" name="sort_by" value="{{ request()->input('sort_by') }}">
                        <input type="hidden" name="sort_order" value="{{ request()->input('sort_order') == 'asc' }}">
                        <button type="submit" class="ml-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Zoeken</button>
                    </form>
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Naam Gezin
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    vertegenwoordiger
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    E-mailadres
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Mobiel
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Adres
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Woonplaats
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Klant Details
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($gezinnen as $gezin)
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    {{$gezin->naam}}
                                </td>

                                <td>
                                    @foreach($gezin->persoon as $persoon)
                                    @if($persoon->IsVertegenwoordiger == 1)
                                    {{$persoon->voornaam}}
                                    @endif
                                    @endforeach
                                </td>

                                <td>
                                    @foreach($gezin->contact as $contact)
                                    {{$contact->Email}}
                                    @endforeach
                                </td>

                                <td>
                                    @foreach($gezin->contact as $contact)
                                    {{$contact->Mobiel}}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($gezin->contact as $contact)
                                    {{$contact->Straat}} {{$contact->Huisnummer}} @if ($contact->Toevoeging != null) {{$contact->Toevoeging}} @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($gezin->contact as $contact)
                                    {{$contact->Woonplaats}}
                                    @endforeach
                                </td>



                                <td>
                                    @foreach($gezin->persoon as $persoon)
                                    @if($persoon->IsVertegenwoordiger == 1)
                                    <a href="{{ route('klant.details', $persoon->id) }}">
                                        <i class="bi bi-journal-text"></i>
                                    </a>
                                    @endif
                                    @endforeach
                                </td>




                                @endforeach
                        </tbody>
                    </table>
                    <button type="button" onclick="window.location.href='/'" class="inline-flex items-center px-2 py-2 bg-green-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Home
                    </button>
                    @if(isset($isEmpty) && $isEmpty)
                    <div class="mt-4 p-4 bg-yellow-100 text-yellow-700 border border-yellow-400 rounded">
                        <strong>Er zijn geen klanten die de geselecteerde postcode hebben.</strong>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            var modal = document.getElementById("successModal");
            var span = document.getElementById("closeModal");

            if (modal) {
                modal.style.display = "flex";

                span.onclick = function() {
                    modal.style.display = "none";
                }

                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            }
        }
    </script>
</x-app-layout>