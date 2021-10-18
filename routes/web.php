<?php
use App\Http\Controllers\KontenVidioController;
use App\Http\Controllers\KontenDokumenController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;

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
    return view('admin.index');
})->name('dashboard');

// Route::get('/konten-vidio', function () {
//     return view('admin.kontenVidio.index');
// })->name('konten-vidio');

// Route::get('/konten-dokumen', function () {
//     return view('admin.kontenDokumen.index');
// })->name('konten-dokumen');

// Route::get('/kelas', function () {
//     return view('admin.kelas.index');
// })->name('kelas');

Route::resource('kontenVidio', KontenVidioController::class);
Route::resource('kontenDokumen', KontenDokumenController::class);
Route::resource('kelas', KelasController::class);


