<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
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

//route untuk menampilkan dashboard admin
Route::get('/', [DashboardController::class, 'index']);

Route::get('salam', function () {
    return '<h1>Assalamualaikum</h1>';
});

Route::get('hello/{name}/{alamat}', function ($name, $alamat) {
    return "<h2>Hello $name dari $alamat</h2>";
});

Route::get('about', function () {
    return view('about');
});
Route::get('produk', function () {
    return view('produk/index');
});
Route::get('produk/{id}', function ($id) {
    return view('produk/index', ['idproduk' => $id]);
});

Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/pasien/create', [PasienController::class, 'create']);
Route::post('/pasien', [PasienController::class, 'store']);

Route::get('/dokter', [DokterController::class, 'index']);
Route::get('/dokter/create', [DokterController::class, 'create']);
Route::post('/dokter', [DokterController::class, 'store']);

//route untuk menampilkan form edit pasien
route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);

//route untuk memproses edit pasien
route::put('/pasien/{id}', [PasienController::class, 'update']);

//route untuk menghapus pasien
Route::delete('/pasien', [PasienController::class, 'destroy']);