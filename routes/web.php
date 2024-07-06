<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\Petugas\PengaduanProsesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TulispengaduanController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RegisterPetugasController;
use App\Models\Admin;
use App\Models\Pengaduan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/pengaduan', [PengaduanController::class, 'create'])->name('pengaduan');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:manager'])->group(function () {
   
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

Route::post('/user/pengaduan', [PengaduanController::class, 'submitPengaduan'])->name('pengaduan.submit');


// routes/web.php
Route::get('/petugas/pengaduanmasuk', [PengaduanController::class, 'index'])->name('petugas.pengaduanmasuk');

// Route::get('/petugas/detail/pengaduan-masuk', [DetailPengaduanController::class, 'index'])->name('detail.pengaduan');
// Route::get('/petugas/pengaduan-proses', [PengaduanProsesController::class, 'index'])->name('pengaduanproses');
// Route::get('/petugas/detail/pengaduan-proses', [DetailPengaduanProsesController::class, 'index'])->name('detail.pengaduanproses');
Route::get('/petugas/pengaduanmasuk/{id}', [PengaduanController::class, 'show'])->name('pengaduan.show');
// Route::post('/petugas/pengaduan-masuk/{id}/balas', [PengaduanController::class, 'balas'])->name('pengaduan.balas');


Route::get('/petugas/pengaduanproses', [PengaduanProsesController::class, 'index'])->name('petugas.pengaduanproses');
Route::get('/petugas/pengaduanditolak', [PengaduanController::class, 'showDitolak'])->name('pengaduanditolak.view');

Route::get('petugas/pengaduanselesai', [PengaduanController::class, 'showSelesai'])->name('pengaduanselesai.view');
Route::put('petugas/pengaduanselesai/{id}', [PengaduanController::class, 'markAsSelesai'])->name('pengaduan.selesai');

Route::get('/petugas/ubahFoto', [PetugasController::class, 'ubahFoto'])->name('petugas.ubah_foto_profile');

Route::get('/pengaduan/{id}', [PengaduanController::class, 'show'])->name('pengaduan.detail');
Route::post('/pengaduan/{id}/tanggapi', [PengaduanController::class, 'tanggapi'])->name('pengaduan.tanggapi');
Route::get('/pengaduan/{id}/sudah', [PengaduanController::class, 'sudah'])->name('pengaduan.sudah');

Route::get('/petugas/pengaduan/{id}/edit', [PengaduanController::class, 'edit'])->name('pengaduan.edit');
Route::put('/petugas/pengaduan/{id}', [PengaduanController::class, 'update'])->name('pengaduan.update');

Route::delete('/pengaduan/{id}/delete', [PengaduanController::class, 'delete'])->name('pengaduan.delete');
Route::get('/pengaduan/balas/form/{id}', [PengaduanController::class, 'showBalasForm'])->name('pengaduan.balas.form');
Route::post('/pengaduan/balas/{id}', [PengaduanController::class, 'balas'])->name('pengaduan.balas');


// Email Verification Routes
Route::get('/verify-otp', [RegisterController::class, 'showVerifyOtpForm'])->name('verify.otp');
Route::post('/verify-otp', [RegisterController::class, 'verifyOtp'])->name('verify.otp.post');






    
//route user
Route::get('user/pengaduan', [TulispengaduanController::class, 'index'])->name('pengaduan.index');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/visi-misi', [VisimisiController::class, 'index'])->name('visimisi');
Route::get('/profil', [ProfileController::class, 'index'])->name('profile');
Route::get('/histori', [HistoryController::class, 'index'])->name('histori');
Route::get('/profile', [ProfileController::class, 'profileuser'])->name('profileuser');
Route::get('/editProfile', [ProfileController::class, 'edit'])->name('editProfile');
Route::put('/editProfile', [ProfileController::class, 'update'])->name('profile.update');



//route admin
Route::get('/admin/tambahpetugas', [RegisterPetugasController::class, 'create'])->name('admin.tambahpetugas');
Route::post('/admin/tambahpetugas', [RegisterPetugasController::class, 'store'])->name('admin.storepetugas');
Route::get('admin/pengaduanmasuk', [PengaduanController::class, 'showMasukAdmin'])->name('admin.pengaduanmasuk');
Route::get('admin/pengaduanproses', [PengaduanController::class, 'showProsesAdmin'])->name('admin.pengaduanproses');
Route::get('admin/pengaduanditolak', [PengaduanController::class, 'showDitolakAdmin'])->name('admin.pengaduanditolak');
Route::get('admin/pengaduanselesai', [PengaduanController::class, 'showSelesaiAdmin'])->name('admin.pengaduanselesai');
Route::get('admin/pengaduan/{status}', [PengaduanController::class, 'show'])->name('admin.pengaduan.show');
