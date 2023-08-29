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
                    <a href={{ route('sewa-mobil.index') }} class="m-5 p-3  rounded-2xl bg-blue-500 text-sm font-bold text-white">
                    ke dashboard
                    </a>
                </div>
                <form action="{{ route('sewa-mobil.store') }}" method="POST" class="m-5 p-5 rounded border">
                    @csrf
                    <div class=" mb-3">
                        <label class="uppercase text-gray-700 text-sm font-bold mb-2" for="name">
                            Nama Mobil
                        </label>
                        <input name="name" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-1 px-4 mb-3" id="name" type="text">
                    
                        <label class="uppercase text-gray-700 text-sm font-bold mb-2" for="model">
                            Model
                        </label>
                        <input name="model" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-1 px-4 mb-3" id="model" type="text">
                    
                        <label class="uppercase text-gray-700 text-sm font-bold mb-2" for="no_plat">
                            No Plat
                        </label>
                        <input name="no_plat" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-1 px-4 mb-3" id="no_plat" type="text">
                    
                        <label class="uppercase text-gray-700 text-sm font-bold mb-2" for="rate">
                            Tarif
                        </label>
                        <input name="rate" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-1 px-4 mb-3" id="rate" type="text">
                    </div>
                    <button type="submit" class="shadow bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                        Send
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
