<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex flex-row ml-24 space-x-8 mt-2 w-fit">
        <a class="bg-green-500 w-64 h-28 rounded-2xl p-2 shadow-2xl" href="#">
            <h3 class="text-right mr-3 text-white font-bold">Prensensi Hari ini</h3>
            <div class="flex ">
                <svg class="w-16 h-16 text-gray-800 dark:text-white" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5 5h8m-1-3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1m6 0v3H6V2m6 0h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m0 9.464 2.025 1.965L12 9.571"/>
                </svg>
                <h4 class="font-bold text-white text-4xl ml-28">16</h4>
            </div>

        </a>

        <a class="bg-red-500 w-64 h-28 rounded-2xl p-2 shadow-2xl" href="#">
            <h3 class="mr-3 text-right text-white font-bold">Tidak Melakukan Presensi</h3>
            <div class="flex">
                <img src="{{asset('missing.svg')}}" class="w-16 h-16" alt="ikon" >
            <h4 class="ml-28 text-white text-4xl font-bold">0</h4>
            </div>
        </a>

        <a class="bg-blue-500 w-64 h-28 rounded-2xl p-2 shadow-2xl" href="#">
            <h3 class="mr-3 text-right text-white font-bold">Total Jumlah Siswa</h3>
            <div class="flex">
                <svg class="w-20 h-16 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                     fill="currentColor" viewBox="0 0 20 19">
                    <path
                        d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                    <path
                        d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
                </svg>
                <h4 class="ml-28 text-white text-4xl font-bold">16</h4>
            </div>
        </a>
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
