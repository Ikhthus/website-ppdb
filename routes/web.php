<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\DataAyahController;
use App\Http\Controllers\DataIbuController;
use App\Http\Controllers\DataWaliSiswaController;
use App\Http\Controllers\AdminController;
use App\Models\DataSiswa;
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
    return view('welcome');
})->name('welcome');
Route::get('/persyaratan', function () {
    return view('persyaratan');
})->name('persyaratan');
Route::get('prosedur', function () {
    return view('prosedur');
})->name('prosedur');
Route::get('jadwal', function () {
    return view('jadwal');
})->name('jadwal');
Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('/register', [AuthController::class, 'showUserRegisterForm'])->name('user.register');
Route::post('/register', [AuthController::class, 'userRegister']);
Route::get('/login', [AuthController::class, 'showUserLoginForm'])->name('user.login');
Route::post('/login', [AuthController::class, 'userLogin']);
Route::get('/password/forgot', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('password.update');
Route::get('/admin/login', [AuthController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'adminLogin']);

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DataSiswaController::class, 'index'])->name('user.dashboard');
    Route::get('/dashboard/pendaftaran', [DataSiswaController::class, 'create'])->name('pendaftaran.create');
    Route::post('/dashboard/pendaftaran', [DataSiswaController::class, 'store'])->name('pendaftaran.store');
    Route::get('/dashboard/pendaftaran/ayah', [DataAyahController::class, 'create'])->name('pendaftaran.create.ayah');
    Route::post('/dashboard/pendaftaran/ayah', [DataAyahController::class, 'store'])->name('pendaftaran.store.ayah');
    Route::get('/dashboard/pendaftaran/ibu', [DataIbuController::class, 'create'])->name('pendaftaran.create.ibu');
    Route::post('/dashboard/pendaftaran/ibu', [DataIbuController::class, 'store'])->name('pendaftaran.store.ibu');
    Route::get('/dashboard/pendaftaran/wali', [DataWaliSiswaController::class, 'create'])->name('pendaftaran.create.wali');
    Route::post('/dashboard/pendaftaran/wali', [DataWaliSiswaController::class, 'store'])->name('pendaftaran.store.wali');
    Route::get('/dashboard/pendaftaran/program', [DataSiswaController::class, 'createProgramKelas'])->name('pendaftaran.create.program');
    Route::post('/dashboard/pendaftaran/program', [DataSiswaController::class, 'InsertProgramKelas'])->name('pendaftaran.store.program');
    Route::get('dashboard/pendaftaran/cetak', [DataSiswaController::class, 'PrintBuktiPendaftaran'])->name('pendaftaran.cetak');
    Route::get('/dashboard/pendaftaran/cetak-kartu', [DataSiswaController::class, 'PrintKartuUjian'])->name('pendaftaran.cetak.kartu');
    // Route::get('/cetak-kartu', [DataSiswaController::class, 'cetakKartu'])->name('cetak.kartu');
});

Route::middleware(['auth:admin', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/verifikasi/{id}', [AdminController::class, 'updateVerifikasi'])->name('admin.verifikasi');
    Route::get('/admin/export/siswa', [AdminController::class, 'ExportDataSiswa'])->name('admin.export.siswa');
    Route::get('/admin/export/ayah', [AdminController::class, 'ExportDataAyah'])->name('admin.export.ayah');
    Route::get('/admin/export/ibu', [AdminController::class, 'ExportDataIbu'])->name('admin.export.ibu');
    Route::get('/admin/export/wali', [AdminController::class, 'ExportDataWali'])->name('admin.export.wali');
});
