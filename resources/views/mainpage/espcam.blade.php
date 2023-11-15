@extends('layouts.presensi')

@section('content')
    <h1 class="font-bold text-3xl text-gray-700 text-center">Silahkan arahkan wajah anda pada sensor kamera</h1>
    <div class="py-2 px-5">
        <div class="flex flex-row">
            <div class="flex flex-col">
                <h2 class="font-thin text-2xl">Kamera Sensor</h2>
                {{--                <img src="http://10.10.182.138/stream" class="w-full h-full" alt="">--}}
                <video id="videoCam" class="h-3/5 w-3/5"></video>
                <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 mt-2 w-3/5"
                        >Konfirmasi Presensi
                </button>
                <div class="flex flex-row">
                    <h2 class="font-bold">Anda Terdeteksi Sebagai: </h2>
                    <p class="ml-1">Yatno</p>
                </div>
                <p class="font-thin opacity-60 italic">*Pastikan nama yang dideteksi sesuai sebelum melakukan
                    presensi</p>
            </div>
            <div class="flex flex-col">
                <h2 class="font-thin text-2xl">Waktu Saat Ini {{now()}}</h2>


                <div class="relative overflow-y-auto max-h-48">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                        <thead class="text-xs text-gray-200 uppercase bg-gray-500 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Siswa
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Waktu Presensi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status presensi
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Yatno
                            </th>
                            <td class="px-6 py-4">
                                {{now()}}
                            </td>
                            <td class="px-6 py-4">
                                Menunggu Konfirmasi Admin
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Yatno
                            </th>
                            <td class="px-6 py-4">
                                {{now()}}
                            </td>
                            <td class="px-6 py-4">
                                Menunggu Konfirmasi Admin
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Yatno
                            </th>
                            <td class="px-6 py-4">
                                {{now()}}
                            </td>
                            <td class="px-6 py-4">
                                Menunggu Konfirmasi Admin
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Yatno
                            </th>
                            <td class="px-6 py-4">
                                {{now()}}
                            </td>
                            <td class="px-6 py-4">
                                Menunggu Konfirmasi Admin
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                Yatno
                            </th>
                            <td class="px-6 py-4">
                                {{now()}}
                            </td>
                            <td class="px-6 py-4">
                                Menunggu Konfirmasi Admin
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="popup-modal" class="modal hidden">
        <button data-modal-hide="popup-modal" type="button" class="absolute top-2 right-2 text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center">
            &times;
        </button>
        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
        <button data-modal-hide="popup-modal" type="button" class="btn-red">
            Yes, I'm sure
        </button>
        <button data-modal-hide="popup-modal" type="button" class="btn-gray">No, cancel</button>
    </div>

    <script>
        let captureWajah = document.querySelector("#ambil-foto")
        let video = document.querySelector("#videoCam")


        function startCam() {
            let All_mediaDevices = navigator.mediaDevices
            if (!All_mediaDevices || !All_mediaDevices.getUserMedia) {
                console.log("getUserMedia() not supported.");
                return;
            }
            All_mediaDevices.getUserMedia({
                // audio: true,
                video: true
            })
                .then(function (vidStream) {
                    // var video = document.getElementById('videoCam');
                    if ("srcObject" in video) {
                        video.srcObject = vidStream;
                    } else {
                        video.src = window.URL.createObjectURL(vidStream);
                    }
                    video.onloadedmetadata = function (e) {
                        video.play();
                    };
                })
                .catch(function (e) {
                    console.log(e.name + ": " + e.message);
                });
        }

        Window.onload(startCam())
    </script>

@endsection
