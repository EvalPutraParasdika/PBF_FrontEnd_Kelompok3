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
    return view('dashboard');
});

// Routes Mahasiswa

Route::resource('mahasiswa', MahasiswaController::class);

// Routes Staff
Route::resource('staff', StaffController::class);

// Routes Dashbard

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Routes Jurusan
Route::resource('jurusan', JurusanController::class);

// Routes Prodi

Route::resource('prodi', ProdiController::class);

// Routes PEngajuan

Route::resource('pengajuan', PengajuanController::class);

// Routes Export PDF
Route::get('/export-mahasiswa-pdf', [PengajuanController::class, 'exportPDF']);


Route::view('/login', 'login')->name('login');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('login.submit');
Route::get('/dashboard', [AuthController::class, 'profile'])->middleware(\App\Http\Middleware\CheckJwtToken::class);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::view('/register', 'register')->name('register');
Route::post('/register', [AuthController::class, 'registerSubmit'])->name('register.submit');


Route::get('/dashboard', [AuthController::class, 'profile'])->middleware('auth.jwt');
Route::middleware([\App\Http\Middleware\CheckJwtToken::class])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'profile']);
});

