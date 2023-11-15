<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight text-gray-800">Tambah Data Absensi</h2>
    </x-slot>

    <div class="bg-white mt-2 p-3 shadow-2xl mx-5 rounded-2xl">
        <div class="flex flex-row">
            <video id="videoCam" class="w-1/4">
            </video>
            <div class="flex-col container">
                <h3 class="font-bold text-2xl">Data Siswa</h3>
                <input type="text" id="nama" placeholder="Nama">
                <input type="text" placeholder="">
            </div>
        </div>
    </div>
<script src="{{URL::asset('js/startCam.js')}}"></script>
</x-app-layout>




