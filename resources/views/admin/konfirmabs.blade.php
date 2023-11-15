<x-app-layout>
    <x-slot name="header">
        <h2>Absensi yang masuk</h2>
    </x-slot>

    <div class="container  p-2 bg-gray-100">
        <div class="relative w-4/5 mx-auto overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                       Nama Siswa
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu Presensi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Yatno
                    </th>

                    <td class="px-6 py-4">
                        {{now()}}
                    </td>

                    <td class="px-6 py-4">
                        <div class="space-x-2">
                            <a href="{{route('test.detpres')}}"
                                 class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Detail</a>
                            <a href="#" class="font-medium text-green-600 dark:text-green-600 hover:underline">Konfirmasi</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-600 hover:underline">Tolak</a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

</x-app-layout>
