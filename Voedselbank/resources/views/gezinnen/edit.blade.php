<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bewerk Allergie van Persoon') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h2 class="text-lg font-semibold mb-4">Bewerk allergie van persoon:</h2>
                <form
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

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                            Opslaan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
