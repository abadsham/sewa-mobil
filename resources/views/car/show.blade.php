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
                    <div>
                        <p class="m-5 p-3 rounded-2xl text-blue-700 text-md font-bold">
                        Detail Data <span class="underline p-2 text-black rounded">{{ $cars->name }}</span>
                        </p>
                    </div>
                    <table>
                        <tr class="border-b border-slate-600">
                            <th class="px-10 py-3">#</th>
                            <th class="px-10 py-3">Nama</th>
                            <th class="px-10 py-3">Model</th>   
                            <th class="px-10 py-3">No Plat</th>
                            <th class="px-10 py-3">Tarif</th>
                            <th class="px-10 py-3"></th>
                        </tr>
                    <tr>
                        <td class="px-10 py-3">{{ $cars->id }}</td>
                        <td class="px-10 py-3">{{ $cars->name }}</td>
                        <td class="px-10 py-3">{{ $cars->model }}</td>
                        <td class="px-10 py-3">{{ $cars->no_plat }}</td>
                        <td class="px-10 py-3">{{ $cars->rate }}</td>
                    </tr>
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
