<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('login');
});

// Routes Mahasiswa

   Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index'); 
   Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
   Route::get('/mahasiswa/{id_mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
   Route::put('/mahasiswa/{id_mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
   Route::delete('/mahasiswa/{id_mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy'); 


// Routes Dashbard

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Routes Jurusan

   Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index'); 
   Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.store');
   Route::get('/jurusan/{id_jurusan}', [JurusanController::class, 'show'])->name('jurusan.show');
   Route::put('/jurusan/{id_jurusan}', [JurusanController::class, 'update'])->name('jurusan.update');
   Route::delete('/jurusan/{id_jurusan}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');


// Routes Export PDF
Route::get('/export-mahasiswa-pdf', [PengajuanController::class, 'exportPDF']);


Route::view('/login', 'login')->name('login');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
// Route::get('/dashboard', [AuthController::class, 'profile'])->middleware(\App\Http\Middleware\CheckJwtToken::class);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::view('/register', 'register')->name('register');
Route::post('/register', [AuthController::class, 'registerSubmit'])->name('register.submit');



   Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index'); 
   Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.store');
   Route::get('/jurusan/{id_jurusan}', [JurusanController::class, 'show'])->name('jurusan.show');
   Route::put('/jurusan/{id_jurusan}', [JurusanController::class, 'update'])->name('jurusan.update');
   Route::delete('/jurusan/{id_jurusan}', [JurusanController::class, 'destroy'])->name('jurusan.destroy');



   Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index'); 
   Route::post('/prodi', [ProdiController::class, 'store'])->name('prodi.store');
   Route::get('/prodi/{id_prodi}', [ProdiController::class, 'show'])->name('prodi.show');
   Route::put('/prodi/{id_prodi}', [ProdiController::class, 'update'])->name('prodi.update');
   Route::delete('/prodi/{id_prodi}', [ProdiController::class, 'destroy'])->name('prodi.destroy'); 




   Route::get('/staff', [StaffController::class, 'index'])->name('staff.index'); 
   Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');
   Route::get('/staff/{id_staff}', [StaffController::class, 'show'])->name('staff.show');
   Route::put('/staff/{id_staff}', [StaffController::class, 'update'])->name('staff.update');
   Route::delete('/staff/{id_staff}', [StaffController::class, 'destroy'])->name('staff.destroy'); 


   Route::get('/pengajuan', [PengajuanController::class, 'index'])->name('pengajuan.index'); 
   Route::post('/pengajuan', [PengajuanController::class, 'store'])->name('pengajuan.store');
   Route::get('/pengajuan/{id_pengajuan}', [PengajuanController::class, 'show'])->name('pengajuan.show');
   Route::put('/pengajuan/{id_pengajuan}', [PengajuanController::class, 'update'])->name('pengajuan.update');
   Route::delete('/pengajuan/{id_pengajuan}', [PengajuanController::class, 'destroy'])->name('pengajuan.destroy');



