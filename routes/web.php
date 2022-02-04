<?php

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
    return view('index');
});

Route::get('/pengurus-dpd', function () {
    return view('web.pengurus-dpd');
});

Route::get('/berita', function () {
    return view('web.berita');
});
Route::get('/kegiatan', function () {
    return view('web.kegiatan');
});
Route::get('/kontak-kami', [App\Http\Controllers\KontakController::class, 'kontak'])->name('kontak');
Route::post('/kontak-kami', [App\Http\Controllers\KontakController::class, 'kontakPost'])->name('kontak.post');

Auth::routes(['except' => ['register']]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/berita', [App\Http\Controllers\Admin\BeritaController::class, 'index'])->name('admin.berita');
