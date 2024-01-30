<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 gap-5 min-h-20">
            <a href="{{route('admin.users.store')}}" class="bg-white overflow-hidden hover:shadow-xl transition-all duration-300 ease-in-out sm:rounded-lg flex items-center justify-center">
                <i class="fa-solid fa-user-plus mr-2 text-green-600"></i> Create users
            </a>
            <a href="{{route('admin.users.list')}}" class="bg-white overflow-hidden hover:shadow-xl transition-all duration-300 ease-in-out sm:rounded-lg flex items-center justify-center">
                <i class="fa-solid fa-user-pen mr-2 text-blue-600"></i> Edit / Delete users
            </a>
        </div>
    </div>
</x-app-layout>
