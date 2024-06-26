<x-app-layout>
    <x-slot name="header">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Homepage voedselbank Maaskantje') }}
            </h2>
            <a href="{{ route('leveranciers.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">
                Bekijk Leveranciers
            </a>
        </div>
    </x-slot>
</x-app-layout>
