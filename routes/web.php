<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
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
    return view('backend.master');
});

//route kelas
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas-create');
Route::post('kelas/store', [KelasController::class, 'store'])->name('kelas-store');
Route::get('/kelas/index', [KelasController::class, 'index'])->name('kelas-index');
Route::get('/kelas/edit{id}', [KelasController::class, 'edit'])->name('kelas-edit');
Route::put('/kelas/update{id}', [KelasController::class, 'update'])->name('kelas-update');
Route::delete('/kelas/delete{id}', [KelasController::class, 'destroy'])->name('kelas-delete');

//route siswa
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa-create');
Route::post('siswa/store', [SiswaController::class, 'store'])->name('siswa-store');
Route::get('/siswa/index',[SiswaController::class, 'index'])->name('siswa-index');
Route::get('/siswa/edit{id}', [SiswaController::class, 'edit'])->name('siswa-edit');
Route::put('/siswa/update{id}', [SiswaController::class, 'update'])->name('siswa-update');
Route::delete('/siswa/delete{id}', [SiswaController::class, 'destroy'])->name('siswa-delete');

//route guru
Route::get('/guru/create', [GuruController::class, 'create'])->name('guru-create');
Route::post('guru/store', [GuruController::class, 'store'])->name('guru-store');
Route::get('/guru/index', [GuruController::class, 'index'])->name('guru-index');
Route::get('/guru/edit{id}', [GuruController::class, 'edit'])->name('guru-edit');
Route::put('/guru/update{id}', [GuruController::class, 'update'])->name('guru-update');
// Route::delete('/kelas/delete{id}', [KelasController::class, 'destroy'])->name('kelas-delete');