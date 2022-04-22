<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengkajianController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LaporanController;
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

// Route::get('/', function () {
//     return view('admin.index');
// });
// Route::get('/table', function () {
//     return view('admin.tables');
// });


Auth::routes();
Route::get('/pengkajian',       [PengkajianController::class, 'pengkajian']);
Route::get('/',                 [PengkajianController::class, 'pengkajian_index']);

Route::get('/home',             [PengkajianController::class, 'pengkajian_index'])->name('home');
Route::post('/addPengkajian',   [PengkajianController::class, 'pengkajian_add']);

Route::get('/resume',           [PengkajianController::class, 'pengkajian_resume']);
Route::post('/hapusData/{id}',  [PengkajianController::class, 'pengkajian_hapus']);

Route::get('/akun',             [PengkajianController::class, 'index_akun']);
Route::post('updateUser/{id}',  [PengkajianController::class, 'update_akun']);

Route::get('/laporan/{id}',          [LaporanController::class, 'index']);
Route::get('/exportlaporan/{id}',    [LaporanController::class, 'export']);
