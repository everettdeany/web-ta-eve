<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userControllerphp;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\MateriControllers;
use App\Http\Controllers\TesterControllers;
use App\Http\Controllers\MainController;
use App\Http\Controllers\VideoControllers;
use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\PengajarControllers;
use App\Http\Controllers\KategorControllers;
use App\Http\Controllers\LaporanControllers;

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

// Enricho Build
Route::get('/', [MainController::class, 'index']);

//User Login
Route::get('/login', [UserController::class, 'index']);
Route::post('/login-post', [UserController::class, 'LoginPost']);
Route::get('/logout', [UserController::class, 'Logout']);

// Admin
Route::get('/admin', [AdminControllers::class, 'index']);
Route::get('/admin/rekap-data', [AdminControllers::class, 'RekapData']);

// Admin Video Data
Route::get('/admin/video-data', [VideoControllers::class, 'index']);
Route::get('/admin/video-data/detail/{id}', [VideoControllers::class, 'Detail']);
Route::get('/admin/add-video-data', [VideoControllers::class, 'AddVideoData']);
Route::post('/admin/add-video-data-post', [VideoControllers::class, 'AddVideoDataPost']);
Route::get('/admin/video-data/edit/{id}', [VideoControllers::class, 'Edit']);
Route::post('/admin/video-data/edit-post', [VideoControllers::class, 'EditPost']);
Route::get('/admin/video-data/delete/{id}', [VideoControllers::class, 'Delete']);

// Admin Materi Data
Route::get('/admin/materi-data', [MateriControllers::class, 'index']);
Route::get('/admin/add-materi-data', [MateriControllers::class, 'create']);
Route::post('/admin/add-materi-data-post', [MateriControllers::class, 'createpost']);
Route::get('/admin/materi-data/edit/{id}', [MateriControllers::class, 'edit']);
Route::post('/admin/materi-data/edit-post', [MateriControllers::class, 'editpost']);
Route::get('/admin/materi-data/delete/{id}', [MateriControllers::class, 'delete']);

// Admin Pengajar Data
Route::get('/admin/pengajar-data', [PengajarControllers::class, 'index']);
Route::get('/admin/add-pengajar-data', [PengajarControllers::class, 'create']);
Route::get('/admin/pengajar-data/detail/{id}', [PengajarControllers::class, 'Detail']);
Route::post('/admin/add-pengajar-data-post', [PengajarControllers::class, 'createpost']);
Route::get('/admin/pengajar-data/edit/{id}', [PengajarControllers::class, 'edit']);
Route::post('/admin/pengajar-data/edit', [PengajarControllers::class, 'editpost']);
Route::get('/admin/pengajar-data/delete/{id}', [PengajarControllers::class, 'delete']);

// Admin Laporan Data
Route::get('/admin/laporan-data', [LaporanControllers::class, 'index']);
Route::get('/admin/add-laporan-data', [LaporanControllers::class, 'create']);
Route::post('/admin/add-laporan-data-post', [LaporanControllers::class, 'createpost']);
Route::get('/admin/laporan-data/edit/{id}', [LaporanControllers::class, 'edit']);
Route::post('/admin/laporan-data/edit', [LaporanControllers::class, 'editpost']);
Route::get('/admin/laporan-data/delete/{id}', [LaporanControllers::class, 'delete']);
Route::get('/admin/laporan-data-generate-pdf/{id}', [LaporanControllers::class, 'generatePDF']);

// Admin Kategori Data
Route::get('/admin/kategori-data', [KategorControllers::class, 'index']);
Route::get('/admin/add-kategori-data', [KategorControllers::class, 'create']);
Route::post('/admin/add-kategori-data-post', [KategorControllers::class, 'createpost']);
Route::get('/admin/kategori-data/edit/{id}', [KategorControllers::class, 'edit']);
Route::post('/admin/kategori-data/edit', [KategorControllers::class, 'editpost']);
Route::get('/admin/kategori-data/delete/{id}', [KategorControllers::class, 'delete']);


// Tester
Route::get('/user-update-data', [TesterControllers::class, 'user_data_update']);

// End Of Enricho Build

// Eve Build
Route::get('/materi', [MateriController::class, 'index']);
Route::get('/materi/delete/{id}', [MateriController::class, 'delete'] );
Route::get('/materi/create', [MateriController::class, 'create']);
Route::post('/materi/create_post', [MateriController::class, 'create_post']);
Route::get('/materi/update/{id}', [MateriController::class, 'update']);
// Route::get('/', [userControllerphp::class, 'home']);
// Route::get('/index', 'userControllerphp@home');
// Route::get('/main', [userControllerphp::class, 'about']);
// Route::get('/main', 'userControllerphp@about');