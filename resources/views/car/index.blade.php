<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hiden shadow-sm sm:rounded-lg">
                <div class="p-8">
                <div class="flex">
                    <div>
                        <a href={{ route('sewa-mobil.create') }} class="m-5 p-3  rounded-2xl bg-blue-500 text-sm font-bold text-white">
                        Tambahkan Mobil
                        </a>
                    </div>
                    <div class="flex items-center max-w-md mx-auto">
                        <div class="w-full">
                            <form action="{{ route('sewa-mobil.index') }}" method="get" class="flex">
                                <input type="search" name="search" class="w-full px-4 py-1 text-gray-800 rounded-l-lg"
                                    placeholder="search" x-model="search">
                                <button type="submit" class="flex items-center bg-blue-500 justify-center w-10 h-9 text-white rounded-r-lg">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </button>   
                            </form>
                        </div>
                    </div>
                </div>
                <table class="m-5">
                    <thead>
                    <tr class="border-b border-slate-600">
                        <th class="px-10 py-3">#</th>
                        <th class="px-10 py-3">Nama</th>
                        <th class="px-10 py-3">Model</th>   
                        <th class="px-10 py-3">No Plat</th>
                        <th class="px-10 py-3">Tarif</th>
                        <th class="px-10 py-3"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($cars as $item)    
                    <tr>
                        <td class="px-10 py-3">{{ $loop->iteration }}</td>
                        <td class="px-10 py-3">{{ $item->name }}</td>
                        <td class="px-10 py-3">{{ $item->model }}</td>
                        <td class="px-10 py-3">{{ $item->no_plat }}</td>
                        <td class="px-10 py-3">{{ $item->rate }}</td>
                        <td class="px-10 py-3">
                            {{-- <a href="" class="bg-teal-500 px-4 py-2 rounded text-slate-50 text-sm">Sewa Mobil</a> --}}
                            <a href="{{ route('sewa-mobil.show', [$item->id]) }}" class="bg-teal-500 px-4 py-2 rounded text-slate-50 text-sm">Sewa Mobil</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
