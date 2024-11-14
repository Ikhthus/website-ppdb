<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\DataOrangTuaController;
use App\Http\Controllers\DataWaliSiswaController;
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
});
Route::get('/register', [AuthController::class, 'showUserRegisterForm'])->name('user.register');
Route::post('/register', [AuthController::class, 'userRegister']);
Route::get('/login', [AuthController::class, 'showUserLoginForm'])->name('user.login');
Route::post('/login', [AuthController::class, 'userLogin']);
Route::get('/admin/login', [AuthController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'adminLogin']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DataSiswaController::class, 'index'])->name('user.dashboard');
    Route::get('/dashboard/pendaftaran', [DataSiswaController::class, 'create'])->name('pendaftaran.create');
    Route::post('/dashboard/pendaftaran', [DataSiswaController::class, 'store'])->name('pendaftaran.store');
    Route::get('/dashboard/pendaftaran/ortu', [DataOrangTuaController::class, 'create'])->name('pendaftaran.create.ortu');
    Route::post('/dashboard/pendaftaran/ortu', [DataOrangTuaController::class, 'store'])->name('pendaftaran.store.ortu');
    Route::get('/dashboard/pendaftaran/wali', [DataWaliSiswaController::class, 'create'])->name('pendaftaran.create.wali');
    Route::post('/dashboard/pendaftaran/wali', [DataWaliSiswaController::class, 'store'])->name('pendaftaran.store.wali');
});