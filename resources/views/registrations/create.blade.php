<x-guest-layout>
    <form method="POST" action="{{ route('registrations.store', $token) }}">
        @csrf
        <div>
            <label for="token" class="block text-sm font-medium leading-6 text-gray-900">Vorname</label>
            <div class="mt-2">
                <input type="text" name="firstname" id="firstname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Vorname">
            </div>
        </div>
        <div>
            <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Nachname</label>
            <div class="mt-2">
                <input type="text" name="lastname" id="lastname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Nachname">
            </div>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
            <div class="mt-2">
                <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="kuerzel@hs-esslingen.de">
            </div>
            {{ $errors->first('email') }}
        </div>
        <div class="mt-6">
            <button type="submit" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-1.5 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                Registrieren
            </button>
        </div>

</x-guest-layout>