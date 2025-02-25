<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>{{ __('Upcoming Events') }}</h3>
                    <ul>
                        <li>Event 1: Date and Time</li>
                        <li>Event 2: Date and Time</li>
                        <li>Event 3: Date and Time</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
