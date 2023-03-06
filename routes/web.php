<?php

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
Route::get('/siswa/index',[SiswaController::class, 'index'])->name('siswa-index');