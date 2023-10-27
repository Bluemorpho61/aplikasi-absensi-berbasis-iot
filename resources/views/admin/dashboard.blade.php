<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-row ml-24 space-x-8 mt-2 w-fit">
        <div class="bg-green-500 w-64 h-28 rounded-2xl p-2 shadow-2xl">
            <h3 class="text-right mr-3 text-white font-bold">Prensensi Hari ini</h3>
            <div class="flex ">
                <svg class="w-16 h-16 text-gray-800 dark:text-white" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5 5h8m-1-3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1m6 0v3H6V2m6 0h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m0 9.464 2.025 1.965L12 9.571"/>
                </svg>
                <h4 class="font-bold text-white text-4xl ml-28">16</h4>
            </div>

        </div>
        <div class="bg-red-500 w-64 h-28 rounded-2xl p-2 shadow-2xl">
            <h3 class="mr-3 text-right text-white font-bold">Tidak Melakukan Presensi</h3>

        </div>
        <div class="bg-blue-500 w-64 h-28 rounded-2xl p-2 shadow-2xl">
            <h3 class="mr-3 text-right text-white font-bold">Total Jumlah Siswa</h3>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("ANDA BERHASIL MASUK!") }}
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
