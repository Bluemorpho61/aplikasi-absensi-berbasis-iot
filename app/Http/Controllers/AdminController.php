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

    function dataBaru()
    {
        return view('admin.databaru');
    }
}
