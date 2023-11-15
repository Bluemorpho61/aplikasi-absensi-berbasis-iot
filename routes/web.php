<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('mainpage.espcam');
});

Route::get('/rfid',function (){
    return view('mainpage.rfid');
})->name('rfid');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::name('test.')->prefix('test')->group(function (){
    Route::get('kelola-siswa',[AdminController::class,'kelSiswa'])->name('kelsis');
    Route::get('detail-siswa',[AdminController::class,'detailSiswa'])->name('detsis');
    Route::get('/kelola-siswa/data-baru',[AdminController::class,'dataBaru'])->name('datbar');
    Route::get('siswa-presensi',[AdminController::class,'siswaPresensi'])->name('sispres');
    Route::get('konfirmasi-presensi',[AdminController::class,'konfirmPresensi'])->name('konfPres');
    Route::get('konfirmasi-presensi/detail-presensi',[AdminController::class, 'detailPresensi'])->name('detpres');
});

Route::get('/newfront',function (){
    return view('mainpage.espcam');
});


require __DIR__.'/auth.php';
