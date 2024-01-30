<x-guest-layout>
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-200 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <x-application-logo/>
            </div>
            @if (Route::has('login'))
            <div class="mt-8">
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-900 hover:text-gray-900 dark:text-gray-900 dark:hover:text-white bg-purple-500 py-2 px-4 rounded-full focus:outline focus:outline-2 focus:rounded-full focus:outline-gray-900">
                    Ingresar
                </a>
                @endauth
            </div>
            @endif
        </div>
    </div>
</x-guest-layout>