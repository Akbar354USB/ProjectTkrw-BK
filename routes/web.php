<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LaporanControlller;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRoleMiddleware;
use App\Models\Riwayat;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


//route admin
Route::middleware('auth', 'ChekRole:ADMIN')->group(function(){

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
Route::delete('/guru/delete{id}', [GuruController::class, 'destroy'])->name('guru-delete');

//user
Route::get('/user/index', [UserController::class, 'index'])->name('user-index');
Route::get('/user/create', [UserController::class, 'create'])->name('user-create');
Route::post('user/store', [UserController::class, 'store'])->name('user-store');
Route::delete('/user/delete{id}', [UserController::class, 'destroy'])->name('user-delete');
});

Route::middleware('auth', 'ChekRole:ADMIN,PIHAK BK')->group(function(){
    //route Peraturan
Route::get('/peraturan/create', [PeraturanController::class, 'create'])->name('peraturan-create');
Route::post('peraturan/store', [PeraturanController::class, 'store'])->name('peraturan-store');
Route::get('/peraturan/index', [PeraturanController::class, 'index'])->name('peraturan-index');
Route::get('/peraturan/edit{id}', [PeraturanController::class, 'edit'])->name('peraturan-edit');
Route::put('/peraturan/update{id}', [PeraturanController::class, 'update'])->name('peraturan-update');
Route::delete('/peraturan/delete{id}', [PeraturanController::class, 'destroy'])->name('peraturan-delete');
});

Route::middleware('auth', 'ChekRole:SISWA,GURU')->group(function(){
Route::get('/pelanggaran/create', [PelanggaranController::class, 'create'])->name('pelanggaran-create');
Route::post('pelanggaran/store', [PelanggaranController::class, 'store'])->name('pelanggaran-store');
});

Route::middleware('auth', 'ChekRole:SISWA,GURU,PIHAK BK')->group(function(){
Route::get('/pelanggaran/index', [PelanggaranController::class, 'index'])->name('pelanggaran-index');
});

Route::middleware('auth', 'ChekRole:SISWA,GURU,PIHAK BK')->group(function(){
Route::get('/riwayat/index', [RiwayatController::class, 'index'])->name('riwayat-index');
});


Route::middleware('auth', 'ChekRole:PIHAK BK')->group(function(){

//route Riwayat
Route::get('/riwayat/create', [RiwayatController::class, 'create'])->name('riwayat-create');
Route::post('riwayat/store', [RiwayatController::class, 'store'])->name('riwayat-store');
Route::get('/riwayat/edit{id}', [RiwayatController::class, 'edit'])->name('riwayat-edit');
Route::put('/riwayat/update{id}', [RiwayatController::class, 'update'])->name('riwayat-update');
Route::delete('/riwayat/delete{id}', [RiwayatController::class, 'destroy'])->name('riwayat-delete');

//route pelanggaran
Route::get('/pelanggaran/edit{id}', [PelanggaranController::class, 'edit'])->name('pelanggaran-edit');
Route::put('/pelanggaran/update{id}', [PelanggaranController::class, 'update'])->name('pelanggaran-update');
Route::delete('/pelanggaran/delete{id}', [PelanggaranController::class, 'destroy'])->name('pelanggaran-delete');

//laporan
Route::get('/laporan/create', [LaporanControlller::class, 'create'])->name('laporan-create');
Route::post('laporan/store', [LaporanControlller::class, 'store'])->name('laporan-store');
Route::delete('/laporan/delete{id}', [LaporanControlller::class, 'destroy'])->name('laporan-delete');
Route::get('/laporan/edit{id}', [LaporanControlller::class, 'edit'])->name('laporan-edit');
Route::put('/laporan/update{id}', [LaporanControlller::class, 'update'])->name('laporan-update');
});


Route::middleware('auth', 'ChekRole:KEPSEK,PIHAK BK')->group(function(){
Route::get('/laporan/index', [LaporanControlller::class, 'index'])->name('laporan-index');
Route::get('/laporan/detail{id}', [LaporanControlller::class, 'detail'])->name('laporan-detail');
Route::get('/laporan/card-laporan', [LaporanControlller::class, 'LaporanCard'])->name('laporan-card-index');
});


Route::middleware('auth', 'ChekRole:ADMIN')->group(function(){

    
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/myprofile', [UserController::class, 'myprofile'])->name('user-profile');
Route::post('/user/updatemyprofile', [UserController::class, 'updateProfile'])->name('update-profile');

Auth::routes();
// Route::match(["GET", "POST"], "/register", function(){
//     return redirect("/login");
//    })->name("register");
