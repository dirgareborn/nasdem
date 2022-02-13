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

Route::get('/', [App\Http\Controllers\WebController::class, 'beranda'])->name('beranda');
Route::get('/tentang-kami', [App\Http\Controllers\WebController::class, 'tentang'])->name('tentang-kami');
Route::get('/privacy-policy', [App\Http\Controllers\WebController::class, 'privacypolicy'])->name('privacy-policy');
Route::get('/pengurus-dpd', [App\Http\Controllers\WebController::class, 'pengurus'])->name('pengurus-dpd');
Route::get('/visi-misi', [App\Http\Controllers\WebController::class, 'VisiMisi'])->name('visi-misi');


Route::get('/berita', [App\Http\Controllers\WebController::class, 'berita'])->name('berita');
Route::get('/tag/{slug}', [App\Http\Controllers\WebController::class, 'getByTag'])->name('berita.tag');
Route::get('/kategori/{slug}', [App\Http\Controllers\WebController::class, 'getByCategory'])->name('berita.kategori');
Route::get('/berita/{slug}', [App\Http\Controllers\WebController::class, 'detailBerita'])->name('detailBerita');


Route::get('/kegiatan', [App\Http\Controllers\WebController::class, 'kegiatan'])->name('kegiatan');


Route::get('/kontak-kami', [App\Http\Controllers\WebController::class, 'kontak'])->name('kontak');
Route::post('/kontak-kami', [App\Http\Controllers\KontakController::class, 'kontakPost'])->name('kontak.post');

Auth::routes(['except' => ['register']]);

// Admin Route
Route::group(['middleware' => ['auth:sanctum']], function () {
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/admin/kategori', 'App\Http\Controllers\Admin\KategoriController', ['except' => ['show']]);
Route::resource('/admin/berita', 'App\Http\Controllers\Admin\BeritaController');
Route::resource('/admin/kegiatan', 'App\Http\Controllers\Admin\KegiatanController');
Route::resource('/admin/jabatan', 'App\Http\Controllers\Admin\JabatanController',['except' => ['index','show']]);
Route::resource('/admin/pengurus', 'App\Http\Controllers\Admin\PengurusController');
Route::resource('/admin/konfigurasi', 'App\Http\Controllers\Admin\KonfigurasiController', ['except' => ['create', 'store','destroy']]);

    Route::get('/admin/profile', function(Request $request) {
        return view('admin.user.profile')->with('user', auth()->user());
    });
    Route::PUT('/admin/profile', [App\Http\Controllers\Admin\UserController::class, 'updateProfile'])->name('profil.update');
    Route::get('notifications/get', 'App\Http\Controllers\Admin\NotificationController@getNotificationsData')->name('notifications.get');

});