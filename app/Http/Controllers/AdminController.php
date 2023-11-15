<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function kelSiswa()
    {
        return view('admin.kelsiswa');
    }

    function detailSiswa()
    {
        return view('admin.detailsiswa');
    }

    function konfirmPresensi()
    {
        return view('admin.konfirmabs');
    }

    function detailPresensi()
    {
        return view('admin.detailpresensi');
    }

    function siswaPresensi()
    {
        return view('admin.siswapresensi');
    }
    function dataBaru()
    {
        return view('admin.databaru');
    }
}
