<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;

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
Route::get('mahasiswa', [mahasiswaController::class, 'index']);
Route::get('/home/tambah', [mahasiswaController::class, 'create']);
Route::post('/home/simpan', [mahasiswaController::class, 'store']);
Route::get('/home/edit/{id}', [mahasiswaController::class, 'edit']);
Route::post('/home/update', [mahasiswaController::class, 'update']);
Route::get('/home/hapus/{id}', [mahasiswaController::class, 'destroy']);