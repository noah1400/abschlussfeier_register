<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex-col">
                    @foreach ($registrations as $registration)
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <div class="text-lg font-bold">
                                {{ $registration->firstname }} {{ $registration->lastname }}
                            </div>
                            <div class="text-sm">{{ $registration->email }}</div>
                        </div>
                    </div>
                    @endforeach
                    <!-- emails to copy -->
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <div class="text-lg font-bold">
                                Emails to copy
                            </div>
                            <div class="text-sm">
                                @foreach ($registrations as $registration)
                                {{ $registration->email }};
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>