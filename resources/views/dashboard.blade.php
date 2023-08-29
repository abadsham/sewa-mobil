<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <a href="{{ route('sewa-mobil.index') }}" class="text-red-600 mx-4" >Lihat Daftar Mobil</a>
                    <a href="{{ route('sewa-mobil.create') }}" class="text-red-600" >Tambah Mobil</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
