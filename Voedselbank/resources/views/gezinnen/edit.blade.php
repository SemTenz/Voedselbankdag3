<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-600 leading-tight">
            {{ __('Wijzig allergie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-4">Bewerk allergie van persoon:</h2>
                <form id="edit-allergie-form"
                    action="{{ route('gezinnen.updateAllergie', ['gezinId' => $gezin->id, 'persoonId' => $persoon->id]) }}"
                    method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="allergie_id" class="block text-sm font-medium text-gray-700">Allergie</label>
                        <select name="allergie_id" id="allergie_id"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach ($allergieën as $allergie)
                                <option value="{{ $allergie->id }}" @if ($persoon->voedselAllergie->first() && $persoon->voedselAllergie->first()->id == $allergie->id) selected @endif>
                                    {{ $allergie->naam }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4"
                            role="alert">
                            <strong class="font-bold"></strong>
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif
                    @if (session('status_success'))
                        <div id="success-message"
                            class="mb-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded shadow">
                            {{ session('status_success') }}
                        </div>
                        <script>
                            // Wacht tot de pagina geladen is
                            document.addEventListener('DOMContentLoaded', function() {
                                // Toon het success bericht
                                const successMessage = document.getElementById('success-message');
                                if (successMessage) {
                                    successMessage.style.display = 'block';

                                    // Wacht 3 seconden (3000ms) en redirect dan
                                    setTimeout(function() {
                                        window.location.href = "{{ route('gezinnen.show', ['gezinId' => $gezin->id]) }}";
                                    }, 3000); // 3000 milliseconden = 3 seconden
                                }
                            });
                        </script>
                    @endif

                    <div class="mt-4 flex justify-between items-center">
                        <button type="submit"
                            class="submit-button inline-flex items-center px-5 py-3 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Wijzig Allergie
                        </button>
                    </div>
                </form>

                <div class="mt-4 flex justify-end space-x-2">
                    <a href="{{ route('gezinnen.show', ['gezinId' => $gezin->id]) }}"
                        class="inline-flex items-center px-5 py-3 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Terug
                    </a>
                    <a href="{{ route('gezinnen.index', ['gezinId' => $gezin->id]) }}"
                        class="inline-flex items-center px-5 py-3 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
